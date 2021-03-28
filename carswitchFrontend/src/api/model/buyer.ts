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

export interface Buyer { 
    carId?: number;
    firstName?: string;
    lastName?: string;
    phone?: string;
    status?: Buyer.StatusEnum;
    readonly createdAt?: Date;
}
export namespace Buyer {
    export type StatusEnum = 'new' | 'in_progress' | 'offer_rejected' | 'not_concluded' | 'not_interested' | 'reserved' | 'pipeline' | 'concluded' | 'sold_by_V';
    export const StatusEnum = {
        New: 'new' as StatusEnum,
        InProgress: 'in_progress' as StatusEnum,
        OfferRejected: 'offer_rejected' as StatusEnum,
        NotConcluded: 'not_concluded' as StatusEnum,
        NotInterested: 'not_interested' as StatusEnum,
        Reserved: 'reserved' as StatusEnum,
        Pipeline: 'pipeline' as StatusEnum,
        Concluded: 'concluded' as StatusEnum,
        SoldByV: 'sold_by_V' as StatusEnum
    };
}