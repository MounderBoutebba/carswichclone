import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { FrontService } from 'src/api/api/front.service';
import { Car } from 'src/api/model/car';
import Energy from '../../enums/Energy';
@Component({
  selector: 'app-isotope',
  templateUrl: './isotope.component.html',
  styleUrls: ['./isotope.component.scss'],
})
export class IsotopeComponent implements OnInit {
  cars: Car[];
  // for the moment we use energy for isotope intead of car model or marque
  energyTypes = Energy;

  constructor(private frontService: FrontService, private router: Router) {
    this.frontService.allCarsFront().subscribe((res: any) => {
      this.cars = res.data.data;
      console.log(this.cars);
    });
    console.log('energy types', this.energyTypes);
  }

  ngOnInit(): void {}
}
