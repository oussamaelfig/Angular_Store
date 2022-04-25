import { Component, OnInit } from '@angular/core';
import { json } from 'body-parser';
import { BdService } from '../bd.service';
import { Product } from '../products';

@Component({
  selector: 'app-cart',
  templateUrl: './cart.component.html',
  styleUrls: ['./cart.component.css'],
})
export class CartComponent implements OnInit {
  items = this.bdService.getItems();

  constructor(private bdService: BdService) {}

  ngOnInit(): void {
    this.items = JSON.parse(localStorage.getItem('products')!);
  }

  filterItemsOfType() {
    var clean = this.items.filter(
      (items, index, self) =>
        index ===
        self.findIndex(
          (t) => t.description === items.description && t.id === items.id
        )
    );

    console.log(clean);
    return clean;
  }

  removeItems(name: string) {
    this.items.filter((e) => e.nom !== name);
    localStorage.setItem('products', JSON.stringify(this.items));
  }
}
