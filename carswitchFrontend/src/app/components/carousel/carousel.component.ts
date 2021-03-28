import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { FrontService } from 'src/api/api/front.service';
import { Car } from 'src/api/model/car';

@Component({
  selector: 'app-carousel',
  templateUrl: './carousel.component.html',
  styleUrls: ['./carousel.component.scss'],
})
export class CarouselComponent implements OnInit {
  featuredCars: Car[];
  constructor(private frontService: FrontService, private router: Router) {
    //implement api for featured cars
    this.frontService.allCarsFront().subscribe((res: any) => {
      this.featuredCars = res.data.data;
      console.log(this.featuredCars);
    });
  }

  ngOnInit(): void {}

  goCarDetails(carId: number) {
    this.router.navigateByUrl('car/' + carId);
  }
}
