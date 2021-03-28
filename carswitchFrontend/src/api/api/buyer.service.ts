/**
 * SwitchCar API
 * SwitchCar API
 *
 * OpenAPI spec version: 1.0.0
 * Contact: contact@algebratec.com
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen.git
 * Do not edit the class manually.
 */ /* tslint:disable:no-unused-variable member-ordering */

import { Inject, Injectable, Optional } from '@angular/core';
import {
  HttpClient,
  HttpHeaders,
  HttpParams,
  HttpResponse,
  HttpEvent,
} from '@angular/common/http';
import { CustomHttpUrlEncodingCodec } from '../encoder';

import { Observable } from 'rxjs';

import { AllBuyersResponse } from '../model/allBuyersResponse';
import { Buyer } from '../model/buyer';
import { DefaultResponse } from '../model/defaultResponse';
import { OneBuyerResponse } from '../model/oneBuyerResponse';

import { BASE_PATH, COLLECTION_FORMATS } from '../variables';
import { Configuration } from '../configuration';

@Injectable()
export class BuyerService {
  protected basePath = 'http://localhost/carswitch/public/';
  public defaultHeaders = new HttpHeaders();
  public configuration = new Configuration();

  constructor(
    protected httpClient: HttpClient,
    @Optional() @Inject(BASE_PATH) basePath: string,
    @Optional() configuration: Configuration
  ) {
    if (basePath) {
      this.basePath = basePath;
    }
    if (configuration) {
      this.configuration = configuration;
      this.basePath = basePath || configuration.basePath || this.basePath;
    }
  }

  /**
   * @param consumes string[] mime-types
   * @return true: consumes contains 'multipart/form-data', false: otherwise
   */
  private canConsumeForm(consumes: string[]): boolean {
    const form = 'multipart/form-data';
    for (const consume of consumes) {
      if (form === consume) {
        return true;
      }
    }
    return false;
  }

  /**
   * Get list of all buyers
   *
   * @param observe set whether or not to return the data Observable as the body, response or events. defaults to returning the body.
   * @param reportProgress flag to report request and response progress.
   */
  public allBuyers(
    observe?: 'body',
    reportProgress?: boolean
  ): Observable<AllBuyersResponse>;
  public allBuyers(
    observe?: 'response',
    reportProgress?: boolean
  ): Observable<HttpResponse<AllBuyersResponse>>;
  public allBuyers(
    observe?: 'events',
    reportProgress?: boolean
  ): Observable<HttpEvent<AllBuyersResponse>>;
  public allBuyers(
    observe: any = 'body',
    reportProgress: boolean = false
  ): Observable<any> {
    let headers = this.defaultHeaders;

    // authentication (bearerAuth) required
    if (this.configuration.accessToken) {
      const accessToken =
        typeof this.configuration.accessToken === 'function'
          ? this.configuration.accessToken()
          : this.configuration.accessToken;
      headers = headers.set('Authorization', 'Bearer ' + accessToken);
    }
    // to determine the Accept header
    let httpHeaderAccepts: string[] = ['application/json'];
    const httpHeaderAcceptSelected:
      | string
      | undefined = this.configuration.selectHeaderAccept(httpHeaderAccepts);
    if (httpHeaderAcceptSelected != undefined) {
      headers = headers.set('Accept', httpHeaderAcceptSelected);
    }

    // to determine the Content-Type header
    const consumes: string[] = [];

    return this.httpClient.request<AllBuyersResponse>(
      'get',
      `${this.basePath}/buyers`,
      {
        withCredentials: this.configuration.withCredentials,
        headers: headers,
        observe: observe,
        reportProgress: reportProgress,
      }
    );
  }

  /**
   * Create a new buyer
   *
   * @param body
   * @param observe set whether or not to return the data Observable as the body, response or events. defaults to returning the body.
   * @param reportProgress flag to report request and response progress.
   */
  public createBuyer(
    body?: Buyer,
    observe?: 'body',
    reportProgress?: boolean
  ): Observable<OneBuyerResponse>;
  public createBuyer(
    body?: Buyer,
    observe?: 'response',
    reportProgress?: boolean
  ): Observable<HttpResponse<OneBuyerResponse>>;
  public createBuyer(
    body?: Buyer,
    observe?: 'events',
    reportProgress?: boolean
  ): Observable<HttpEvent<OneBuyerResponse>>;
  public createBuyer(
    body?: Buyer,
    observe: any = 'body',
    reportProgress: boolean = false
  ): Observable<any> {
    let headers = this.defaultHeaders;

    // authentication (bearerAuth) required
    if (this.configuration.accessToken) {
      const accessToken =
        typeof this.configuration.accessToken === 'function'
          ? this.configuration.accessToken()
          : this.configuration.accessToken;
      headers = headers.set('Authorization', 'Bearer ' + accessToken);
    }
    // to determine the Accept header
    let httpHeaderAccepts: string[] = ['application/json'];
    const httpHeaderAcceptSelected:
      | string
      | undefined = this.configuration.selectHeaderAccept(httpHeaderAccepts);
    if (httpHeaderAcceptSelected != undefined) {
      headers = headers.set('Accept', httpHeaderAcceptSelected);
    }

    // to determine the Content-Type header
    const consumes: string[] = ['application/json'];
    const httpContentTypeSelected:
      | string
      | undefined = this.configuration.selectHeaderContentType(consumes);
    if (httpContentTypeSelected != undefined) {
      headers = headers.set('Content-Type', httpContentTypeSelected);
    }

    return this.httpClient.request<OneBuyerResponse>(
      'post',
      `${this.basePath}/buyer/create`,
      {
        body: body,
        withCredentials: this.configuration.withCredentials,
        headers: headers,
        observe: observe,
        reportProgress: reportProgress,
      }
    );
  }

  /**
   * Delete a specifique buyer by id
   *
   * @param buyerId The ID of a specifique buyer
   * @param observe set whether or not to return the data Observable as the body, response or events. defaults to returning the body.
   * @param reportProgress flag to report request and response progress.
   */
  public deleteBuyer(
    buyerId: number,
    observe?: 'body',
    reportProgress?: boolean
  ): Observable<DefaultResponse>;
  public deleteBuyer(
    buyerId: number,
    observe?: 'response',
    reportProgress?: boolean
  ): Observable<HttpResponse<DefaultResponse>>;
  public deleteBuyer(
    buyerId: number,
    observe?: 'events',
    reportProgress?: boolean
  ): Observable<HttpEvent<DefaultResponse>>;
  public deleteBuyer(
    buyerId: number,
    observe: any = 'body',
    reportProgress: boolean = false
  ): Observable<any> {
    if (buyerId === null || buyerId === undefined) {
      throw new Error(
        'Required parameter buyerId was null or undefined when calling deleteBuyer.'
      );
    }

    let headers = this.defaultHeaders;

    // authentication (bearerAuth) required
    if (this.configuration.accessToken) {
      const accessToken =
        typeof this.configuration.accessToken === 'function'
          ? this.configuration.accessToken()
          : this.configuration.accessToken;
      headers = headers.set('Authorization', 'Bearer ' + accessToken);
    }
    // to determine the Accept header
    let httpHeaderAccepts: string[] = ['application/json'];
    const httpHeaderAcceptSelected:
      | string
      | undefined = this.configuration.selectHeaderAccept(httpHeaderAccepts);
    if (httpHeaderAcceptSelected != undefined) {
      headers = headers.set('Accept', httpHeaderAcceptSelected);
    }

    // to determine the Content-Type header
    const consumes: string[] = [];

    return this.httpClient.request<DefaultResponse>(
      'delete',
      `${this.basePath}/buyer/${encodeURIComponent(String(buyerId))}`,
      {
        withCredentials: this.configuration.withCredentials,
        headers: headers,
        observe: observe,
        reportProgress: reportProgress,
      }
    );
  }

  /**
   * Edit a specifique buyer by ID
   *
   * @param buyerId The ID of a specifique buyer
   * @param body
   * @param observe set whether or not to return the data Observable as the body, response or events. defaults to returning the body.
   * @param reportProgress flag to report request and response progress.
   */
  public editBuyer(
    buyerId: number,
    body?: Buyer,
    observe?: 'body',
    reportProgress?: boolean
  ): Observable<OneBuyerResponse>;
  public editBuyer(
    buyerId: number,
    body?: Buyer,
    observe?: 'response',
    reportProgress?: boolean
  ): Observable<HttpResponse<OneBuyerResponse>>;
  public editBuyer(
    buyerId: number,
    body?: Buyer,
    observe?: 'events',
    reportProgress?: boolean
  ): Observable<HttpEvent<OneBuyerResponse>>;
  public editBuyer(
    buyerId: number,
    body?: Buyer,
    observe: any = 'body',
    reportProgress: boolean = false
  ): Observable<any> {
    if (buyerId === null || buyerId === undefined) {
      throw new Error(
        'Required parameter buyerId was null or undefined when calling editBuyer.'
      );
    }

    let headers = this.defaultHeaders;

    // authentication (bearerAuth) required
    if (this.configuration.accessToken) {
      const accessToken =
        typeof this.configuration.accessToken === 'function'
          ? this.configuration.accessToken()
          : this.configuration.accessToken;
      headers = headers.set('Authorization', 'Bearer ' + accessToken);
    }
    // to determine the Accept header
    let httpHeaderAccepts: string[] = ['application/json'];
    const httpHeaderAcceptSelected:
      | string
      | undefined = this.configuration.selectHeaderAccept(httpHeaderAccepts);
    if (httpHeaderAcceptSelected != undefined) {
      headers = headers.set('Accept', httpHeaderAcceptSelected);
    }

    // to determine the Content-Type header
    const consumes: string[] = ['application/json'];
    const httpContentTypeSelected:
      | string
      | undefined = this.configuration.selectHeaderContentType(consumes);
    if (httpContentTypeSelected != undefined) {
      headers = headers.set('Content-Type', httpContentTypeSelected);
    }

    return this.httpClient.request<OneBuyerResponse>(
      'put',
      `${this.basePath}/buyer/${encodeURIComponent(String(buyerId))}`,
      {
        body: body,
        withCredentials: this.configuration.withCredentials,
        headers: headers,
        observe: observe,
        reportProgress: reportProgress,
      }
    );
  }

  /**
   * Get detaille of a specifique buyer by ID
   *
   * @param buyerId The ID of a specifique buyer
   * @param observe set whether or not to return the data Observable as the body, response or events. defaults to returning the body.
   * @param reportProgress flag to report request and response progress.
   */
  public getBuyerById(
    buyerId: number,
    observe?: 'body',
    reportProgress?: boolean
  ): Observable<OneBuyerResponse>;
  public getBuyerById(
    buyerId: number,
    observe?: 'response',
    reportProgress?: boolean
  ): Observable<HttpResponse<OneBuyerResponse>>;
  public getBuyerById(
    buyerId: number,
    observe?: 'events',
    reportProgress?: boolean
  ): Observable<HttpEvent<OneBuyerResponse>>;
  public getBuyerById(
    buyerId: number,
    observe: any = 'body',
    reportProgress: boolean = false
  ): Observable<any> {
    if (buyerId === null || buyerId === undefined) {
      throw new Error(
        'Required parameter buyerId was null or undefined when calling getBuyerById.'
      );
    }

    let headers = this.defaultHeaders;

    // authentication (bearerAuth) required
    if (this.configuration.accessToken) {
      const accessToken =
        typeof this.configuration.accessToken === 'function'
          ? this.configuration.accessToken()
          : this.configuration.accessToken;
      headers = headers.set('Authorization', 'Bearer ' + accessToken);
    }
    // to determine the Accept header
    let httpHeaderAccepts: string[] = ['application/json'];
    const httpHeaderAcceptSelected:
      | string
      | undefined = this.configuration.selectHeaderAccept(httpHeaderAccepts);
    if (httpHeaderAcceptSelected != undefined) {
      headers = headers.set('Accept', httpHeaderAcceptSelected);
    }

    // to determine the Content-Type header
    const consumes: string[] = [];

    return this.httpClient.request<OneBuyerResponse>(
      'get',
      `${this.basePath}/buyer/${encodeURIComponent(String(buyerId))}`,
      {
        withCredentials: this.configuration.withCredentials,
        headers: headers,
        observe: observe,
        reportProgress: reportProgress,
      }
    );
  }
}