import { Component, OnInit } from '@angular/core';
import { CartService } from '../services/cart.service';

@Component({
  selector: 'app-navbar',
  templateUrl: './navbar.component.html',
  styleUrls: ['./navbar.component.css'],
})
export class NavbarComponent implements OnInit {
  nbItems!: Number;
  constructor(private cartService: CartService) {}

  itemCount() {
    this.nbItems = this.cartService.itemsCount();
    return this.nbItems;
  }
  ngOnInit(): void {
    this.nbItems = JSON.parse(localStorage.getItem('nbItems')!);
  }
}