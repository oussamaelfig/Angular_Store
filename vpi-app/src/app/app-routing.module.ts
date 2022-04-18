import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { AboutComponent } from './about/about.component';
import { AppComponent } from './app.component';
import { CartComponent } from './cart/cart.component';
import { AccueilComponentComponent } from './accueil-component/accueil-component.component';
import { ProductDetailsComponent } from './product-details/product-details.component';
import { ProductListComponent } from './product-list/product-list.component';
import { SearchComponent } from './search/search.component';

const routes: Routes = [
  {
    path: '',
    component: AccueilComponentComponent,
  },
  {
    path: 'products',
    component: ProductListComponent,
  },
  {
    path: 'search',
    component: SearchComponent,
  },
  {
    path: 'about',
    component: AboutComponent,
  },
  { path: 'products/:productId', component: ProductDetailsComponent },
  { path: 'cart', component: CartComponent },
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule],
})
export class AppRoutingModule {}
