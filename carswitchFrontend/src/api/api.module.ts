import {
  NgModule,
  ModuleWithProviders,
  SkipSelf,
  Optional,
} from '@angular/core';
import { Configuration } from './configuration';
import { HttpClient } from '@angular/common/http';

import { AdminService } from './api/admin.service';
import { BackOfficeUserService } from './api/backOfficeUser.service';
import { BuyerService } from './api/buyer.service';
import { CarService } from './api/car.service';
import { ColorService } from './api/color.service';
import { DefaultService } from './api/default.service';
import { FeatureService } from './api/feature.service';
import { FrontService } from './api/front.service';
import { GarageService } from './api/garage.service';
import { InspectionService } from './api/inspection.service';
import { OpeningTimeService } from './api/openingTime.service';
import { QuestionService } from './api/question.service';
import { RdvService } from './api/rdv.service';
import { UserService } from './api/user.service';

@NgModule({
  imports: [],
  declarations: [],
  exports: [],
  providers: [
    AdminService,
    BackOfficeUserService,
    BuyerService,
    CarService,
    ColorService,
    DefaultService,
    FeatureService,
    FrontService,
    GarageService,
    InspectionService,
    OpeningTimeService,
    QuestionService,
    RdvService,
    UserService,
  ],
})
export class ApiModule {
  public static forRoot(
    configurationFactory: () => Configuration
  ): ModuleWithProviders<ApiModule> {
    return {
      ngModule: ApiModule,
      providers: [{ provide: Configuration, useFactory: configurationFactory }],
    };
  }

  constructor(
    @Optional() @SkipSelf() parentModule: ApiModule,
    @Optional() http: HttpClient
  ) {
    if (parentModule) {
      throw new Error(
        'ApiModule is already loaded. Import in your base AppModule only.'
      );
    }
    if (!http) {
      throw new Error(
        'You need to import the HttpClientModule in your AppModule! \n' +
          'See also https://github.com/angular/angular/issues/20575'
      );
    }
  }
}
