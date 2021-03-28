import { Injectable } from '@angular/core';
import { Resolve, Router } from '@angular/router';

import { FrontService } from '../../api/api/front.service';

@Injectable()
export class CarListResolver implements Resolve<any> {
  constructor(private carService: FrontService, private router: Router) {}

  resolve() {
    return this.carService.allCarsFront();
  }
}
