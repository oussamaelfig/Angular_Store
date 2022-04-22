import { Component, OnInit } from '@angular/core';
import { CartService } from '../services/cart.service';

@Component({
  selector: 'app-navbar',
  templateUrl: './navbar.component.html',
  styleUrls: ['./navbar.component.css'],
})
export class NavbarComponent implements OnInit {
  nbItems: Number;
  constructor(private cartService: CartService) {}

  ngOnInit(): void {}

  nbItems = function () {
    return this.cartService.itemsCount();
  };
}
