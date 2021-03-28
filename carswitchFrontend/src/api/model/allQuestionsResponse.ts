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
import { DefaultResponse } from './defaultResponse';
import { PaginatedResponse } from './paginatedResponse';
import { Question } from './question';

export interface AllQuestionsResponse extends PaginatedResponse { 
    message?: string;
    status?: boolean;
    data?: Array<Question>;
}