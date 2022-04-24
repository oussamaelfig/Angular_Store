import { Component, OnInit } from '@angular/core';
import { CartService } from '../services/cart.service';

@Component({
  selector: 'app-navbar',
  templateUrl: './navbar.component.html',
  styleUrls: ['./navbar.component.css'],
})
export class NavbarComponent implements OnInit {
  //items = this.cartService.itemsCount();

  constructor(private cartService: CartService) {}

  ngOnInit(): void {
this.itemCount() {
    return null
  }

  }

  itemCount() {
    return this.cartService.itemsCount();
  }
}
