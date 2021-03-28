import { Component, OnInit } from '@angular/core';
import { User } from '../../api/model/user';
import { TranslateService } from '@ngx-translate/core';
import { ActivatedRoute, Router } from '@angular/router';
import { AuthenticateService } from '../shared/authenticate.service';
import { SharedService } from '../shared/shared.service';

@Component({
  selector: 'app-header',
  templateUrl: './header.component.html',
  styleUrls: ['./header.component.scss'],
})
export class HeaderComponent implements OnInit {
  ngOnInit(): void {
    this.userService.userSubject.subscribe((data) => {
      this.userNotConnected = data === null ? true : false;
    });
    this.sharedService.currentLang = 'fr';
  }
  user: User;
  userNotConnected: boolean;
  constructor(
    private sharedService: SharedService,
    public translate: TranslateService,
    private route: ActivatedRoute,
    private router: Router,
    private userService: AuthenticateService
  ) {}

  logout() {
    localStorage.removeItem('user');
    this.userService.userSubject.next(null);
    this.router.navigate(['login']);
  }
  translateFunc(lang: string) {
    this.translate.use(lang);
    this.translate.onLangChange.emit({ lang: lang, translations: '' });
    this.sharedService.currentLang = lang;
    localStorage.setItem('lang', lang);
  }
}
