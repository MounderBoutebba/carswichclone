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

export interface Car { 
    readonly id?: number;
    colorId?: number;
    wilayaId?: number;
    modelId?: number;
    body?: Car.BodyEnum;
    status?: Car.StatusEnum;
    tyre?: Car.TyreEnum;
    document?: Car.DocumentEnum;
    roof?: Car.RoofEnum;
    specs?: Car.SpecsEnum;
    driveType?: Car.DriveTypeEnum;
    deal?: Car.DealEnum;
    seat?: Car.SeatEnum;
    transmition?: Car.TransmitionEnum;
    energy?: Car.EnergyEnum;
    seatNumber?: number;
    numberOfOwner?: number;
    cylindreNumber?: number;
    year?: number;
    horsePower?: number;
    registrationDocumentPath?: Blob;
    controlDocumentPath?: Blob;
    licensePlat?: string;
    vin?: string;
    used?: boolean;
    torque?: string;
    phone?: string;
    featured?: boolean;
    ownerDescription?: string;
    carOverview?: string;
    information?: string;
    pictures?: Array<Blob>;
    readonly createdAt?: Date;
}
export namespace Car {
    export type BodyEnum = 'sedan' | 'suv' | 'coupe' | 'hatchback' | 'convertible' | 'wagon' | 'pickup' | 'minivan' | 'van';
    export const BodyEnum = {
        Sedan: 'sedan' as BodyEnum,
        Suv: 'suv' as BodyEnum,
        Coupe: 'coupe' as BodyEnum,
        Hatchback: 'hatchback' as BodyEnum,
        Convertible: 'convertible' as BodyEnum,
        Wagon: 'wagon' as BodyEnum,
        Pickup: 'pickup' as BodyEnum,
        Minivan: 'minivan' as BodyEnum,
        Van: 'van' as BodyEnum
    };
    export type StatusEnum = 'new' | 'remind' | 'duplicate' | 'bad_condition' | 'missing_documents' | 'not_interested' | 'refusal_to_pay_inspection' | 'refusal_to_pay_commission' | 'unreachable' | 'overvalued' | 'appointment_taken' | 'published' | 'already_sold' | 'concluded' | 'sold_by_v';
    export const StatusEnum = {
        New: 'new' as StatusEnum,
        Remind: 'remind' as StatusEnum,
        Duplicate: 'duplicate' as StatusEnum,
        BadCondition: 'bad_condition' as StatusEnum,
        MissingDocuments: 'missing_documents' as StatusEnum,
        NotInterested: 'not_interested' as StatusEnum,
        RefusalToPayInspection: 'refusal_to_pay_inspection' as StatusEnum,
        RefusalToPayCommission: 'refusal_to_pay_commission' as StatusEnum,
        Unreachable: 'unreachable' as StatusEnum,
        Overvalued: 'overvalued' as StatusEnum,
        AppointmentTaken: 'appointment_taken' as StatusEnum,
        Published: 'published' as StatusEnum,
        AlreadySold: 'already_sold' as StatusEnum,
        Concluded: 'concluded' as StatusEnum,
        SoldByV: 'sold_by_v' as StatusEnum
    };
    export type TyreEnum = '12' | '13' | '14' | '15' | '16' | '17' | '18' | '19' | '20' | '21' | '22';
    export const TyreEnum = {
        _12: '12' as TyreEnum,
        _13: '13' as TyreEnum,
        _14: '14' as TyreEnum,
        _15: '15' as TyreEnum,
        _16: '16' as TyreEnum,
        _17: '17' as TyreEnum,
        _18: '18' as TyreEnum,
        _19: '19' as TyreEnum,
        _20: '20' as TyreEnum,
        _21: '21' as TyreEnum,
        _22: '22' as TyreEnum
    };
    export type DocumentEnum = 'carte_grise' | 'carte_jaune' | 'licence';
    export const DocumentEnum = {
        CarteGrise: 'carte_grise' as DocumentEnum,
        CarteJaune: 'carte_jaune' as DocumentEnum,
        Licence: 'licence' as DocumentEnum
    };
    export type RoofEnum = 'sunroof' | 'sun_and_moonroof' | 'moonroof' | 'panoramic' | 'convertible' | 'normal_roof';
    export const RoofEnum = {
        Sunroof: 'sunroof' as RoofEnum,
        SunAndMoonroof: 'sun_and_moonroof' as RoofEnum,
        Moonroof: 'moonroof' as RoofEnum,
        Panoramic: 'panoramic' as RoofEnum,
        Convertible: 'convertible' as RoofEnum,
        NormalRoof: 'normal_roof' as RoofEnum
    };
    export type SpecsEnum = 'GCC' | 'european' | 'japanese' | 'american' | 'canadian' | 'non_GCC';
    export const SpecsEnum = {
        GCC: 'GCC' as SpecsEnum,
        European: 'european' as SpecsEnum,
        Japanese: 'japanese' as SpecsEnum,
        American: 'american' as SpecsEnum,
        Canadian: 'canadian' as SpecsEnum,
        NonGCC: 'non_GCC' as SpecsEnum
    };
    export type DriveTypeEnum = 'AWD' | '2WD' | '4WD';
    export const DriveTypeEnum = {
        AWD: 'AWD' as DriveTypeEnum,
        _2WD: '2WD' as DriveTypeEnum,
        _4WD: '4WD' as DriveTypeEnum
    };
    export type DealEnum = 'fantastic_deal' | 'from_agency';
    export const DealEnum = {
        FantasticDeal: 'fantastic_deal' as DealEnum,
        FromAgency: 'from_agency' as DealEnum
    };
    export type SeatEnum = 'leather_seats' | 'fabric_seats';
    export const SeatEnum = {
        LeatherSeats: 'leather_seats' as SeatEnum,
        FabricSeats: 'fabric_seats' as SeatEnum
    };
    export type TransmitionEnum = 'automatic' | 'manual' | 'tiptronic';
    export const TransmitionEnum = {
        Automatic: 'automatic' as TransmitionEnum,
        Manual: 'manual' as TransmitionEnum,
        Tiptronic: 'tiptronic' as TransmitionEnum
    };
    export type EnergyEnum = 'ess' | 'diesel' | 'hybride';
    export const EnergyEnum = {
        Ess: 'ess' as EnergyEnum,
        Diesel: 'diesel' as EnergyEnum,
        Hybride: 'hybride' as EnergyEnum
    };
}