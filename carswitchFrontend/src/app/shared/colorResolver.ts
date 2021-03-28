import { Injectable } from '@angular/core';
import { Resolve, Router } from '@angular/router';

import { CarService } from '../../api/api/car.service';
import { ColorService } from '../../api/api/color.service';
import { ActivatedRouteSnapshot } from '@angular/router';
import { Car } from '../../api/model/car';
import { Color } from '../../api/model/color';

@Injectable()
export class ColorResolver implements Resolve<any> {
  carId: number;

  color: Color;
  constructor(
    private carService: CarService,
    private colorService: ColorService,
    private router: Router
  ) {}

  resolve(r: ActivatedRouteSnapshot) {
    this.carId = r.params['id'];
    if (isNaN(this.carId)) {
      this.router.navigateByUrl('/');
    } else {
      this.carService.getCarById(this.carId).subscribe((res) => {
        return this.colorService.getColorById(res.data.colorId);
      });
    }
  }
}
