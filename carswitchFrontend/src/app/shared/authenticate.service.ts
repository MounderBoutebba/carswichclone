import { Injectable } from '@angular/core';
import { BehaviorSubject } from 'rxjs';
import { User } from 'src/api/model/user';

@Injectable({
  providedIn: 'root',
})
export class AuthenticateService {
  userSubject: BehaviorSubject<User>;
  constructor() {
    this.userSubject = new BehaviorSubject<User>(
      JSON.parse(localStorage.getItem('user'))
    );
  }
}
