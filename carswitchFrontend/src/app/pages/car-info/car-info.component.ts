import { Component, OnInit } from '@angular/core';
import { ActivatedRoute, Router } from '@angular/router';
import { CarService } from 'src/api/api/car.service';
import { ColorService } from 'src/api/api/color.service';
import { FrontService } from 'src/api/api/front.service';
import { Car } from 'src/api/model/car';
import { Color } from 'src/api/model/color';
import { SharedService } from 'src/app/shared/shared.service';
declare var $: any;

@Component({
  selector: 'app-car-info',
  templateUrl: './car-info.component.html',
  styleUrls: ['./car-info.component.scss'],
})
export class CarInfoComponent implements OnInit {
  constructor(
    private router: Router,
    private activatedRoute: ActivatedRoute,
    private colorService: ColorService,
    private carService: CarService,
    private carFrontService: FrontService,
    private sharedService: SharedService
  ) {
    if (this.sharedService.carInfoDetailsEventClicked) {
      this.car = sharedService.car;
      this.colorName = sharedService.colorName;
      console.log(sharedService);
    } else {
      this.car = this.activatedRoute.snapshot.data.carDetails.data;

      //tempo
      this.colorName = 'black';
      if (this.car === null) this.router.navigateByUrl('/');
    }
    console.log(this.car);
  }
  carId: number;
  car: any;
  color: Color;
  colorName: string;
  ngOnInit(): void {
    if ($('.js-slider-for').length) {
      $('.js-slider-for').slick({
        arrows: true,
        fade: true,
        asNavFor: '.js-slider-nav',
      });
      $('.js-slider-nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.js-slider-for',
        focusOnSelect: true,
      });
    }
  }
}
