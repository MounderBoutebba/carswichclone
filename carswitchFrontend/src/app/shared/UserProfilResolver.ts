import { Injectable } from '@angular/core';

import { Resolve, Router } from '@angular/router';

import { LoggedInData } from '../../api/model/loggedInData';
import { UserService } from '../../api/api/user.service';
import { User } from '../../api/model/user';

@Injectable()
export class UserProfilResolver implements Resolve<any> {
  constructor(private _userService: UserService, private _router: Router) {}
  loggedData: LoggedInData;
  currentUser: User;
  resolve() {
    let loggedData = localStorage.getData('user');
    if (loggedData != null) {
      this.currentUser = loggedData.user;
      return this._userService.getUserById(this.currentUser.id);
    }
  }
}
