import {
    Component,
    ElementRef,
    OnInit,
    EventEmitter,
    ViewChild,
    ViewEncapsulation,
    Input,
    Output,
} from "@angular/core";
import { MatIconModule } from "@angular/material/icon";
import { MatIcon } from "@angular/material/icon";

import { MatPaginator } from "@angular/material/paginator";
import { MatSort } from "@angular/material/sort";
import { fuseAnimations } from "@fuse/animations";
import { FuseTranslationLoaderService } from "@fuse/services/translation-loader.service";

import { locale as english } from "./i18n/en";
import { locale as french } from "./i18n/fr";

import { CurrencyPipe } from "@angular/common";
import { registerLocaleData } from "@angular/common";
import localeFr from "@angular/common/locales/fr";
registerLocaleData(localeFr, "fr");

@Component({
    selector: "dataTable-component",
    templateUrl: "./dataTable.component.html",
    styleUrls: ["./dataTable.component.scss"],
    animations: fuseAnimations,
    encapsulation: ViewEncapsulation.None,
})
export class DataTableComponent implements OnInit {
    @Input() displayedColumns = [];
    @Input() canSearch = "true";
    @Input() canAdd = "true";
    @Input() elements = [];
    @Input() name = "";
    @Input() total = 0;
    @Input() icon = "store_mall_directory";

    @Output() searchEvent: EventEmitter<any> = new EventEmitter();
    @Output() selectEvent: EventEmitter<any> = new EventEmitter();
    @Output() sortByEvent: EventEmitter<any> = new EventEmitter();
    @Output() actionEvent: EventEmitter<any> = new EventEmitter();
    @Output() pageEvent: EventEmitter<any> = new EventEmitter();
    @Output() addEvent: EventEmitter<any> = new EventEmitter();

    displayedNames = [];
    fields = [];
    sortBy = "";
    sortStatus = [];
    ascending = true;

    @ViewChild(MatPaginator, { static: true })
    paginator: MatPaginator;

    @ViewChild(MatSort, { static: true })
    sort: MatSort;

    @ViewChild("filter", { static: true })
    filter: ElementRef;
    tableSortStatus = [0, 0, 0, 0, 0, 0, 0];

    constructor(
        private cp: CurrencyPipe,
        private _fuseTranslationLoaderService: FuseTranslationLoaderService
    ) {
        this._fuseTranslationLoaderService.loadTranslations(french, english);
    }

    /**
     * On init
     */
    ngOnInit(): void {
        console.log("in element");
        this.displayedColumns.forEach((element) => {
            this.sortStatus.push(0);
            this.displayedNames.push(element.name);
            this.fields.push(element.field);
        });

        //this.baseService.hideSplashScreen();
    }

    toNumber(s): number {
        return Number(s);
    }

    handlePage(e): void {
        // Will be an output from the component to refresh the element list
        this.pageEvent.emit(e);
    }

    termChanged(e): void {
        // Will be an output from the component to search in elements
        this.searchEvent.emit(e);
    }

    sortTable(i): void {
        // Will be an output from the component to search in elements
        if (this.sortStatus[i] < 2) {
            this.sortStatus[i]++;
        } else {
            this.sortStatus[i] = 0;
        }
        for (let index = 0; index < this.sortStatus.length; index++) {
            if (index !== i) {
                this.sortStatus[index] = 0;
            }
        }
        this.sortByEvent.emit({
            column: this.fields[i],
            direction: this.sortStatus[i],
        });
    }

    setSelectedElement(element): void {
        // Will be an output from the component of the selected element
        this.selectEvent.emit(element);
    }

    addClicked(): void {
        this.addEvent.emit();
    }

    formatEntry(e, pipe, arg = "") {
        if (pipe === "") {
            return e;
        }
        if (pipe === "price") {
            return this.cp.transform(e, arg, "symbol", "1.2-2", "fr");
        }
        if (pipe === "date") {
            return e.split("T")[0];
        }
        // if (pipe === 'price') { return e; }
    }

    actionClick(action, element): void {
        this.actionEvent.emit({ action: action, element: element });
    }
}
