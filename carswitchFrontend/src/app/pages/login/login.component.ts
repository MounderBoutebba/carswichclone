import { Component, OnInit } from '@angular/core';
import { FormBuilder, FormGroup, Validators } from '@angular/forms';
import { ActivatedRoute, Router } from '@angular/router';
import { BehaviorSubject, Observable } from 'rxjs';
import { FrontService } from 'src/api/api/front.service';
import { UserService } from 'src/api/api/user.service';
import { LoggedInData } from 'src/api/model/loggedInData';
import { Login } from 'src/api/model/login';
import { AuthenticateService } from '../../shared/authenticate.service';
@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.scss'],
})
export class LoginComponent implements OnInit {
  form: FormGroup;
  submitted: boolean;
  loading: boolean;
  returnUrl: string;
  loginCredentiels: Login;
  error: boolean;
  errorMessage: string;
  public user: Observable<LoggedInData>;
  constructor(
    private userService: AuthenticateService,
    private frontService: FrontService,
    private formBuilder: FormBuilder,
    private route: ActivatedRoute,
    private router: Router
  ) {}

  ngOnInit(): void {
    this.loginCredentiels = {
      email: '',
      password: '',
    };
    this.form = this.formBuilder.group({
      email: ['', [Validators.required, Validators.email]],
      password: ['', Validators.required],
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
    this.loginCredentiels.email = this.formctrl.email.value;
    this.loginCredentiels.password = this.formctrl.password.value;

    this.loading = true;
    this.frontService.login(this.loginCredentiels).subscribe(
      (data) => {
        localStorage.setItem('user', JSON.stringify(data.data));
        this.userService.userSubject.next(data.data.user);
        this.router.navigate(['']);
      },
      (error) => {
        this.error = true;
        this.errorMessage = error.error.message;
        this.loading = false;
      }
    );
  }
}
