import { Component, OnInit } from '@angular/core';
import { products } from '../products';
import { CartService } from '../services/cart.service';

@Component({
  selector: 'app-cart',
  templateUrl: './cart.component.html',
  styleUrls: ['./cart.component.css'],
})
export class CartComponent implements OnInit {
  //items = this.cartService.getItems();
  items: Product[] = [];

  constructor(private cartService: CartService) {}

  ngOnInit(): void {
    this.items = JSON.parse(localStorage.getItem('products'));
  }
}
