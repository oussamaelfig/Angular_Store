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

  // filterItemsOfType() {
  //   var clean = this.items.filter(
  //     (items, index, self) =>
  //       index ===
  //       self.findIndex(
  //         (t) => t.description === items.description && t.id === items.id
  //       )
  //   );

  //   console.log(clean);
  //   return clean;
  // }

  removeItems(name: string) {
    for (let i = 0; i < this.items.length; i++) {
      if (this.items[i].nom === name) {
        this.items.splice(i, 1);
        localStorage.setItem('products', JSON.stringify(this.items));
        return;
      }
    }
  }

  prixTotal() {
    let total = 0;
    for (let i = 0; i < this.items.length; i++) {
      total += this.items[i].prix;
    }
  }

  clearAll() {
    this.items = [];
    return this.bdService.clearCart();
  }
}
