import { Component, OnInit } from '@angular/core';
import { CartService } from '../services/cart.service';

@Component({
  selector: 'app-navbar',
  templateUrl: './navbar.component.html',
  styleUrls: ['./navbar.component.css'],
})
export class NavbarComponent implements OnInit {
  constructor(private cartService: CartService) {}

  ngOnInit(): void {
    this.items = JSON.parse(localStorage.getItem('nbItems')!);
  }

  items = this.cartService.itemsCount();

  // itemCount() {
  //   return this.cartService.itemsCount();
  // }
}
