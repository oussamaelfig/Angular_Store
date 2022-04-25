import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { NavbarComponent } from './navbar/navbar.component';
import { ProductListComponent } from './product-list/product-list.component';
import { ProductDetailsComponent } from './product-details/product-details.component';
import { CartComponent } from './cart/cart.component';
import { BannerComponent } from './banner/banner.component';
import { QuestionsAccordionComponent } from './questions-accordion/questions-accordion.component';
import { SliderComponent } from './slider/slider.component';
import { FooterComponent } from './footer/footer.component';
import { AboutComponent } from './about/about.component';
import { AccueilComponentComponent } from './accueil-component/accueil-component.component';
import { CarrouselComponent } from './carrousel/carrousel.component';
import { SearchComponent } from './search/search.component';
import { Ng2OrderModule } from 'ng2-order-pipe';
import { Ng2SearchPipeModule } from 'ng2-search-filter';
import { NgxPaginationModule } from 'ngx-pagination';
import { MatTableModule } from '@angular/material/table';
import {FormsModule, ReactiveFormsModule} from '@angular/forms';
import { PostulerComponent } from './postuler/postuler.component';
import { HttpClientModule } from  '@angular/common/http';
import { LoginComponent } from './login/login.component';
import { SuccessComponent } from './success/success.component';
//import { Observable, throwError } from 'rxjs';
//import { map, catchError} from 'rxjs/operators';


@NgModule({
  declarations: [
    AppComponent,
    NavbarComponent,
    ProductListComponent,
    ProductDetailsComponent,
    CartComponent,
    BannerComponent,
    QuestionsAccordionComponent,
    SliderComponent,
    FooterComponent,
    AboutComponent,
    AccueilComponentComponent,
    CarrouselComponent,
    SearchComponent,
    PostulerComponent,
    LoginComponent,
    SuccessComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    Ng2OrderModule,
    Ng2SearchPipeModule,
    NgxPaginationModule,
    MatTableModule,
    HttpClientModule,
    FormsModule,
    ReactiveFormsModule,
    //Observable
  ],
  providers: [],
  bootstrap: [AppComponent],
})
export class AppModule {}
