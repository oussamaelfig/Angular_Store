import { Component, OnInit } from '@angular/core';
import { products } from '../products';

@Component({
  selector: 'app-search',
  templateUrl: './search.component.html',
  styleUrls: ['./search.component.css'],
})
export class SearchComponent implements OnInit {
  products: any = products;
  nomProduit: any;
  constructor() {}

  ngOnInit(): void {
    this.products = products;
  }

  Search() {
    if (this.nomProduit == '') {
      this.ngOnInit();
    } else {
      this.products = this.products.filter(
        (res: { nom: { toLocalLowerCase: () => string } }) => {
          return res.nom
            .toString()
            .toLowerCase()
            .match(this.nomProduit.toLowerCase());
        }
      );
    }
  }
}
