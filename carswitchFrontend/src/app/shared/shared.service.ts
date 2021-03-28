import { Injectable } from '@angular/core';
import { BehaviorSubject } from 'rxjs';
import { Wilaya } from 'src/api/model/wilaya';
import { Car } from '../../api/model/car';
import { Color } from '../../api/model/color';
import { DefaultService } from 'src/api/api/default.service';
import { ColorService } from 'src/api/api/color.service';

@Injectable({
  providedIn: 'root',
})
export class SharedService {
  carInfoDetailsEventClicked: boolean;
  car: Car;
  colorName: string;
  currentLang: string;
  colors: Color[];
  wilayas: Wilaya[];
  constructor(
    private colorService: ColorService,
    private wilayaService: DefaultService
  ) {
    this.wilayaService.allWilayas().subscribe((res: any) => {
      this.wilayas = res.data;
    });
    this.colorService.allColors().subscribe((res) => {
      this.colors = res.data;
    });
  }
}
