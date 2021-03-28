import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { ReactiveFormsModule, FormsModule } from '@angular/forms';
import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { HeaderComponent } from './header/header.component';
import { FooterComponent } from './footer/footer.component';
import { SliderComponent } from './components/slider/slider.component';
import { HomeComponent } from './pages/home/home.component';
import { FindComponent } from './components/find/find.component';
import { WelcomeComponent } from './components/welcome/welcome.component';
import { CarouselComponent } from './components/carousel/carousel.component';
import { ServicesComponent } from './components/services/services.component';
import { BannerComponent } from './components/banner/banner.component';
import { ProgressComponent } from './components/progress/progress.component';
import { IsotopeComponent } from './components/isotope/isotope.component';
import { StepsComponent } from './components/steps/steps.component';
import { GoodsComponent } from './components/goods/goods.component';
import { TeamComponent } from './components/team/team.component';
import { ReviewsComponent } from './components/reviews/reviews.component';
import { GalleryComponent } from './components/gallery/gallery.component';
import { Banner2Component } from './components/banner2/banner2.component';
import { AboutComponent } from './pages/about/about.component';
import { ContactComponent } from './pages/contact/contact.component';
import { BlogMainComponent } from './pages/blog/blog-main/blog-main.component';
import { BlogPostComponent } from './pages/blog/blog-post/blog-post.component';
import { ListingComponent } from './pages/listing/listing.component';
import { CarInfoComponent } from './pages/car-info/car-info.component';
import { LoginComponent } from './pages/login/login.component';

import { ApiModule } from '../api/api.module';
import { HttpClient, HttpClientModule } from '@angular/common/http';
import { RegisterComponent } from './pages/register/register.component';
import { CarInfoResolver } from '../app/shared/carInfoResolver';
import { ColorResolver } from '../app/shared/colorResolver';
import { CarListResolver } from '../app/shared/carListResolver';
import { UserProfilResolver } from '../app/shared/UserProfilResolver';
import { ConfirmEmailComponent } from './pages/register/confirm-email/confirm-email.component';
import { CreateCarComponent } from './pages/create-car/create-car.component';
import { TranslateModule, TranslateLoader } from '@ngx-translate/core';
import { TranslateHttpLoader } from '@ngx-translate/http-loader';
import { ProfileComponent } from './pages/profile/profile.component';

export function HttpLoaderFactory(http: HttpClient) {
  return new TranslateHttpLoader(http);
}
@NgModule({
  declarations: [
    AppComponent,
    HeaderComponent,
    FooterComponent,
    SliderComponent,
    HomeComponent,
    FindComponent,
    WelcomeComponent,
    CarouselComponent,
    ServicesComponent,
    BannerComponent,
    ProgressComponent,
    IsotopeComponent,
    StepsComponent,
    GoodsComponent,
    TeamComponent,
    ReviewsComponent,
    GalleryComponent,
    Banner2Component,
    AboutComponent,
    ContactComponent,
    BlogMainComponent,
    BlogPostComponent,
    ListingComponent,
    CarInfoComponent,
    LoginComponent,
    RegisterComponent,
    ConfirmEmailComponent,
    CreateCarComponent,
    ProfileComponent,
  ],
  imports: [
    BrowserModule,
    TranslateModule.forRoot({
      defaultLanguage: 'fr',
      loader: {
        provide: TranslateLoader,
        useFactory: HttpLoaderFactory,
        deps: [HttpClient],
      },
    }),
    AppRoutingModule,
    ApiModule,
    HttpClientModule,
    ReactiveFormsModule,
    FormsModule,
  ],
  providers: [
    CarInfoResolver,
    UserProfilResolver,
    ColorResolver,
    CarListResolver,
  ],
  bootstrap: [AppComponent],
})
export class AppModule {}
