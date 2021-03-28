import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { HomeComponent } from './pages/home/home.component';
import { AboutComponent } from './pages/about/about.component';
import { ContactComponent } from './pages/contact/contact.component';
import { ListingComponent } from './pages/listing/listing.component';
import { CarInfoComponent } from './pages/car-info/car-info.component';
import { BlogMainComponent } from './pages/blog/blog-main/blog-main.component';
import { BlogPostComponent } from './pages/blog/blog-post/blog-post.component';
import { LoginComponent } from './pages/login/login.component';
import { RegisterComponent } from './pages/register/register.component';
import { AuthGuard } from './../app/helpers/auth.guard';
import { CarInfoResolver } from '../app/shared/carInfoResolver';
import { ConfirmEmailComponent } from './pages/register/confirm-email/confirm-email.component';
import { CarListResolver } from '../app/shared/carListResolver';
import { CreateCarComponent } from './pages/create-car/create-car.component';
import { ProfileComponent } from './pages/profile/profile.component';

const routes: Routes = [
  { path: '', component: HomeComponent },
  { path: 'about', component: AboutComponent },
  { path: 'profile', component: ProfileComponent },
  { path: 'blog', component: BlogMainComponent },
  { path: 'blog/:id', component: BlogPostComponent },
  {
    path: 'car/:id',
    component: CarInfoComponent,
    resolve: { carDetails: CarInfoResolver },
  },
  {
    path: 'listing',
    component: ListingComponent,
    resolve: { carsList: CarListResolver },
  },
  { path: 'contact', component: ContactComponent },
  { path: 'login', component: LoginComponent },
  { path: 'register', component: RegisterComponent },
  { path: 'confirmMail', component: ConfirmEmailComponent },
  { path: 'createCar', component: CreateCarComponent },
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule],
})
export class AppRoutingModule {}
