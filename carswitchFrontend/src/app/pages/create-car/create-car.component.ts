import { Component, OnInit } from '@angular/core';
import { FormBuilder, FormGroup, Validators } from '@angular/forms';
import { ActivatedRoute, Router } from '@angular/router';
import { FrontService } from 'src/api/api/front.service';
import { Car } from 'src/api/model/car';
import { User } from 'src/api/model/user';
import { UserService } from '../../../api/api/user.service';
@Component({
  selector: 'app-create-car',
  templateUrl: './create-car.component.html',
  styleUrls: ['./create-car.component.scss'],
})
export class CreateCarComponent implements OnInit {
  form: FormGroup;
  submitted: boolean;
  loading: boolean;
  returnUrl: string;
  error: boolean;
  errorMessage: string;
  userCredentiels: User;
  carInformations: Car;
  constructor(
    private formBuilder: FormBuilder,
    private route: ActivatedRoute,
    private router: Router,
    private frontService: FrontService,
    private userService: UserService
  ) {}

  ngOnInit(): void {
    this.form = this.formBuilder.group({
      first_name: ['', Validators.required],
      last_name: ['', Validators.required],
      email: ['', [Validators.required, Validators.email]],
      password: ['', Validators.required],
      password_confirmation: ['', Validators.required],
      phone: ['', Validators.required],
      birthday: ['', Validators.required],
      city: ['', Validators.required],
      address: ['', Validators.required],
      country: ['', Validators.required],
      post_code: ['', Validators.required],
    });

    this.error = false;
    this.returnUrl = this.route.snapshot.queryParams['returnUrl'] || '/';
  }

  get formctrl() {
    return this.form.controls;
  }

  onSubmit() {
    this.submitted = true;

    // stop here if form is invalid
    if (this.form.invalid) {
      return;
    }
    this.userCredentiels = this.form.value;
    this.loading = true;
    this.frontService.register(this.userCredentiels).subscribe(
      (data) => {
        this.router.navigate(['confirmMail']);
      },
      (error) => {
        this.error = true;
        this.errorMessage = error.error.message;
        this.loading = false;
      }
    );
  }
}
