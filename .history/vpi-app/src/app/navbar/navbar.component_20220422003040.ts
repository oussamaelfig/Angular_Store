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
    this.itemCount = JSON.parse(localStorage.getItem('nbItems')!);
  }

  itemCount() {
    return this.cartService.itemsCount();
  }
}
