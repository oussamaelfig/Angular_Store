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
    let filtred = (this.items = [...new Set(this.items)]);
    console.log(this);
    return filtred;
  }

  removeItems(name: string) {
    for (let i = 0; i < this.items.length; i++) {
      if (this.items[i].nom === name) {
        this.items.splice(i, 1);
        localStorage.setItem('products', JSON.stringify(this.items));
        return;
      }
    }
  }
}
