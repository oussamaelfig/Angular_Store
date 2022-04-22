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
    localStorage.setItem('products', JSON.stringify(this.items));
  }

  getItems() {
    return this.items;
  }

  itemsCount() {
    localStorage.setItem('nbItems', JSON.stringify(this.items.length));
    return this.items.length;
  }

  clearCart() {
    localStorage.removeItem('products');
    this.items = [];
    return this.items;
  }
}
