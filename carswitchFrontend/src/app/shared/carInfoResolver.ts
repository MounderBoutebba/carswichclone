import { Injectable } from '@angular/core';
import { Resolve, Router } from '@angular/router';

import { FrontService } from '../../api/api/front.service';
import { CarService } from '../../api/api/car.service';
import { ActivatedRouteSnapshot } from '@angular/router';

@Injectable()
export class CarInfoResolver implements Resolve<any> {
  carId: number;
  constructor(private carService: CarService, private router: Router) {}

  resolve(r: ActivatedRouteSnapshot) {
    this.carId = r.params['id'];
    if (isNaN(this.carId)) {
      this.router.navigateByUrl('/');
    } else {
      return this.carService.getCarById(this.carId);
      // for now use this methode until implementation of
      //further logic regarding status of car in back end
      // return this.carService.getCarByIdFront(this.carId);
    }
  }
}
