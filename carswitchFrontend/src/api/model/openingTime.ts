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

export interface OpeningTime { 
    readonly id?: number;
    name?: string;
    morningOpeningTime?: number;
    morningCloseTime?: number;
    afternoonOpeningTime?: number;
    afternoonCloseTime?: number;
    readonly createdAt?: Date;
}