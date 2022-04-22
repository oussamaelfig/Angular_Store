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

  ngOnInit(): void {
    this.items = JSON.parse(localStorage.getItem('nbItems')!);
  }

  nbitems=itemCount():Number {
    return this.cartService.itemsCount();

  }
}
