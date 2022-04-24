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

  nbItems!: Number;
  ngOnInit(): void {
    this.nbItems = JSON.parse(localStorage.getItem('nbItems')!);
  }

  itemCount() {
    this.nbItems = this.cartService.itemsCount();
    return this.nbItems;
  }
}
