import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { MaterialModule, MdIconModule, MdNativeDateModule } from '@angular/material';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';
import { HttpModule, Http } from '@angular/http';

// Components
import { NomenclatureComponent } from './form/nomenclature/nomenclature.component';
import { ObserversComponent } from './form/observers/observers.component';
import { TaxonomyComponent } from './form/taxonomy/taxonomy.component';
import { CountingComponent } from './form/counting/counting.component'
import { MapComponent } from './map/map.component';
import { OccurrenceComponent } from './form/occurrence/occurrence.component'
import { TranslateModule, TranslateLoader} from '@ngx-translate/core';
import { TranslateHttpLoader } from '@ngx-translate/http-loader';

// Service
import  { MapService } from './map/map.service';
import  { DataFormService } from './form/data-form.service';
import  { FormService } from './form/form.service';

export function HttpLoaderFactory(http: Http) {
  return new TranslateHttpLoader(http, './assets/i18n/', '.json');
}

@NgModule({
  imports: [
    CommonModule,
    MaterialModule,
    MdIconModule,
    MdNativeDateModule,
    FormsModule,
    ReactiveFormsModule,
    TranslateModule.forRoot({
      loader: {
          provide: TranslateLoader,
          useFactory: HttpLoaderFactory,
          deps: [Http]
      }
  }),
  ],
  declarations: [
    NomenclatureComponent,
    ObserversComponent,
    TaxonomyComponent,
    MapComponent,
    OccurrenceComponent,
    CountingComponent

  ],
  providers : [
    MapService,
    DataFormService,
    FormService],
  exports: [    
    NomenclatureComponent,
    ObserversComponent,
    TaxonomyComponent,
    MapComponent,
    OccurrenceComponent,
    CountingComponent,
    FormsModule,
    ReactiveFormsModule,
    MaterialModule,
    MdIconModule,
    MdNativeDateModule,
    TranslateModule,
  ]
})
export class GN2CommonModule {
}