import { Component, OnInit, ElementRef, ViewChild} from '@angular/core';
import { MapService } from '../../map/map.service';
import {MapListService} from '../../map-list/map-list.service';
import {DatatableComponent} from '@swimlane/ngx-datatable';


@Component({
  selector: 'pnx-map-data',
  templateUrl: './map-data.component.html',
  styleUrls: ['./map-data.component.scss']
})
export class MapDataComponent implements OnInit {
  @ViewChild(DatatableComponent) table: DatatableComponent;

  columns = [
    { prop: 'taxon' },
    { prop: 'observer' },
    { prop: 'date' }
  ];
  selected = [];
  releves = [];
  rows = [];

  constructor(private _mapListService: MapListService) {
    _mapListService.getReleves().subscribe(res => {
      res.features.forEach(el => {
        const row: RowsData = {
          id : el.id,
          taxon : el.properties.occurrences.map(occ => occ.nom_cite ).join(', '),
          observer : el.properties.observers.map(obs => obs.prenom_role + ' ' + obs.nom_role).join(', '),
          date  : el.properties.meta_create_date
        };
        // cache our list in releves use for filter
        this.releves.push(row);
      });

      this.rows = [...this.releves];
    });
    this._mapListService.gettingTableId$.subscribe(res => {
      this.selected = [];
      for ( const i in this.releves) {
        if (this.releves[i].id === res ) {
          this.selected.push(this.releves[i]);
        }
      }
    });
  }

  ngOnInit() {
  }

  onSelect({ selected }) {
    this._mapListService.setCurrentLayerId(this.selected[0].id);
  }

  updateFilter(event) {

    const val = event.target.value.toLowerCase();

    // filter our data
    const temp = this.releves.filter(function(d) {
      return d.taxon.toLowerCase().indexOf(val) !== -1 || !val;
    });

    // update the rows
    this.rows = temp;
    // Whenever the filter changes, always go back to the first page
    this.table.offset = 0;
  }

}

export interface RowsData {
  id: string;
  taxon: any;
  observer: any;
  date: any;
}
