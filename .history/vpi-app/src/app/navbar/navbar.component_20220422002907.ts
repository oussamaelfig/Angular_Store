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
    this.nbItems = JSON.parse(localStorage.getItem('nbItems')!);
  }

  nbItems: Number = () => {
    return this.cartService.itemsCount();
  };
}
