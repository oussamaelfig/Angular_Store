import { Injectable } from '@angular/core';
import { Product } from '../products';

@Injectable({
  providedIn: 'root',
})
export class CartService {
  items: Product[] = [];

  constructor() {}

  addToCart(product: Product) {
    this.items.push(product);
    localStorage.setItem('product', JSON.stringify(this.items));
  }

  getItems() {
    return this.items;
  }

  itemsCount() {
    return this.items.length;
  }

  clearCart() {
    this.items = [];
    return this.items;
  }
}
