import { Component, OnInit } from '@angular/core';
import { Car } from 'src/api/model/car';
import { FrontService } from '../../../api/api/front.service';
import { ColorService } from '../../../api/api/color.service';
import BodyType from '../../enums/bodyType';
import Energy from '../../enums/Energy';
import Transmission from '../../enums/Transmission';
import Document from '../../enums/Document';
import { FormBuilder, FormGroup } from '@angular/forms';
import { AllCarsResponse } from 'src/api/model/allCarsResponse';
import { Color } from 'src/api/model/color';
import { ActivatedRoute, Router } from '@angular/router';
import { SharedService } from '../../shared/shared.service';
import { TranslateService } from '@ngx-translate/core';
import { DefaultService } from 'src/api/api/default.service';
import { Wilaya } from 'src/api/model/wilaya';
declare var $: any;
@Component({
  selector: 'app-listing',
  templateUrl: './listing.component.html',
  styleUrls: ['./listing.component.scss'],
})
export class ListingComponent implements OnInit {
  constructor(
    private activatedRoute: ActivatedRoute,
    private sharedService: SharedService,
    private carServiceFront: FrontService,
    private colorService: ColorService,
    private formBuilder: FormBuilder,
    private router: Router,
    private translate: TranslateService,
    private wilayaService: DefaultService
  ) {
    this.wilayaService.allWilayas().subscribe((res: any) => {
      this.wilayas = res.data;
      console.log(this.wilayas);
    });
    this.colorService.allColors().subscribe((res) => {
      this.colors = res.data;
    });
    this.wilayas = sharedService.wilayas;
    this.colors = sharedService.colors;
    this.createFormBuilder();
    this.carResponse = this.activatedRoute.snapshot.data.carsList.data;
  }
  currentLanguage: string;
  myForm: FormGroup;
  carResponse: AllCarsResponse;
  responseLinks: {
    active: boolean;
    url: string;
    label: string;
  };
  colors: Color[];
  cars: Car[];
  bodyTypes = BodyType;
  energyType = Energy;
  transmissionType = Transmission;
  documentType = Document;
  lastPage: number;
  wilayas: Wilaya[];
  previousPage = 0;
  currentPage = 1;
  nextPage = 2;
  ngOnInit(): void {
    this.sharedService.carInfoDetailsEventClicked = false;
    this.currentLanguage = this.sharedService.currentLang;

    this.translate.onLangChange.subscribe((val) => {
      this.currentLanguage = val.lang;

      this.resset();
    });
    this.getCars(1);
  }
  ngAfterViewInit(): void {
    $('.selectpicker').selectpicker('refresh');
  }
  get formctrl() {
    return this.myForm.controls;
  }

  resset() {
    $('.selectpicker').selectpicker('');
    this.createFormBuilder();
    this.getCars(1);
    $('.selectpicker').selectpicker('refresh');
  }
  createFormBuilder() {
    this.myForm = this.formBuilder.group({
      searchTerm: null,
      bodyTypeSelected: null,
      energySelected: null,
      transmissionSelected: null,
      documentSelected: null,
      priceMin: null,
      priceMax: null,
      color: null,
      marque: null,
      model: null,
      yearStart: null,
      yearEnd: null,
      region: null,
      wilaya: null,
      mileageStart: null,
      mileageEnd: null,
    });
  }
  getCars(page: number) {
    this.carServiceFront
      .allCarsFront(
        this.formctrl.searchTerm.value,
        this.formctrl.priceMin.value,
        this.formctrl.priceMax.value,
        this.formctrl.color.value,
        this.formctrl.marque.value,
        this.formctrl.model.value,
        this.formctrl.yearStart.value,
        this.formctrl.yearEnd.value,
        this.formctrl.region.value,
        this.formctrl.wilaya.value,
        this.formctrl.mileageStart.value,
        this.formctrl.mileageEnd.value,
        this.formctrl.bodyTypeSelected.value,
        this.formctrl.documentSelected.value,
        this.formctrl.transmissionSelected.value,
        this.formctrl.energySelected.value,
        page
      )
      .subscribe((response: any) => {
        this.carResponse = response.data;
        this.cars = this.carResponse.data;
        this.responseLinks = response.data.links;
        this.currentPage = response.data.current_page;
        this.lastPage = response.data.last_page;
        this.previousPage = this.currentPage - 1;
        this.nextPage = this.currentPage + 1;
      });
  }
  getPage(page: number) {
    if (page < 1 || page > this.lastPage) {
      return;
    }
    this.getCars(page);
  }
  getCarDetails(car: Car, color: string) {
    this.sharedService.carInfoDetailsEventClicked = true;
    this.sharedService.car = car;
    this.sharedService.colorName = color;
    this.router.navigateByUrl('car/' + car.id);
  }

  someRange2config: any = {
    start: [2, 45],
    connect: true,
    step: 1,
    // tooltips: true,

    // tooltips: [true, wNumb({decimals: 1})],
    range: {
      min: 1,
      max: 50,
    },
  };
}
