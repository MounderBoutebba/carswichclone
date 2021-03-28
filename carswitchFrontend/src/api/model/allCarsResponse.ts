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
 */
import { Car } from './car';
import { DefaultResponse } from './defaultResponse';
import { PaginatedResponse } from './paginatedResponse';

export interface AllCarsResponse extends DefaultResponse { 
    currentPage: number;
    firstPageUrl: string;
    from: number;
    lastPage: number;
    lastPageUrl: string;
    nextPageUrl: string;
    path: string;
    perPage?: number;
    prevPageUrl: string;
    to: number;
    total: number;
    data?: Array<Car>;
}