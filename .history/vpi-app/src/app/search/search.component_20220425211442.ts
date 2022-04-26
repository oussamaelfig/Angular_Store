import { Component, OnInit } from '@angular/core';
import { BdService } from '../bd.service';
import { products } from '../products';

@Component({
  selector: 'app-search',
  templateUrl: './search.component.html',
  styleUrls: ['./search.component.css'],
})
export class SearchComponent implements OnInit {
  items = this.bdService.getItems();

  products: any = products;
  nomProduit: any;
  p: number = 1;

  constructor(private bdService: BdService) {}

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

  key: string = 'id';
  reverse: boolean = false;
  sort(key: string) {
    this.key = key;
    this.reverse = !this.reverse;
  }

  addToCart(product: any) {
    this.bdService.togglePanier(product);
    localStorage.setItem('products', JSON.stringify(this.items));
  }
}
