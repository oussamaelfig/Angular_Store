import { Component, OnInit } from '@angular/core';
import { json } from 'body-parser';
import { CartService } from '../services/cart.service';

@Component({
  selector: 'app-cart',
  templateUrl: './cart.component.html',
  styleUrls: ['./cart.component.css'],
})
export class CartComponent implements OnInit {
  items = this.cartService.getItems();

  constructor(private cartService: CartService) {
    this.items = JSON.parse(localStorage.getItem('allo')!);
  }

  ngOnInit(): void {}
}
