import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { AboutComponent } from './about/about.component';
import { AppComponent } from './app.component';
import { CartComponent } from './cart/cart.component';
import { AccueilComponentComponent } from './accueil-component/accueil-component.component';
import { ProductDetailsComponent } from './product-details/product-details.component';
import { ProductListComponent } from './product-list/product-list.component';
import { SearchComponent } from './search/search.component';
import { PostulerComponent } from './postuler/postuler.component';
import { MerciComponent } from './merci/merci.component';
import { LoginComponent } from './login/login.component';
import { SuccessComponent } from './success/success.component';

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
  {
    path: 'products/:productId',
    component: ProductDetailsComponent
  },

  {
    path: 'cart',
    component: CartComponent
  },
  {
    path: 'postuler',
    component: PostulerComponent
  },
  {
    path: 'accueil',
    component: AccueilComponentComponent
  },
  {
    path: 'merci',
    component: MerciComponent
  },
  {
    path: 'connecter',
    component: LoginComponent
  },
  {
    path: 'succes',
    component: SuccessComponent
  }
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule],
})
export class AppRoutingModule {}
