import { Injectable } from '@angular/core';
import * as listeCandidat from '../assets/JSON/candidats.json';
import { HttpClient, HttpResponse } from '@angular/common/http';
import { Observable, throwError } from 'rxjs';
import { map, catchError } from 'rxjs/operators';
import { Product } from './products';

@Injectable({
  providedIn: 'root',
})
export class BdService {
  private users: any = [];
  private candidats: any = (listeCandidat as any).default;
  private produits: any = [];
  //liste des codes qui se trouvent dans le panier
  lstpanier: any[] = [];
  items: any;

  constructor(protected http: HttpClient) {
    /*this.getData("usagers.json").subscribe((res)=>{
      this.users = res
      console.log(this.users)
    });*/
  }
  getData(filename: string): Observable<HttpResponse<any>> {
    let urlP = 'http://localhost:3001/getjson?f=';
    let url = urlP.concat(filename);
    let data: any = this.http.get(url, { observe: 'response' });
    return data;
  }

  /*
  //retourne un tableau de json avec le endpoint /getjson de GET
  getData(filename:string){
    let data:any;
    let urlP = "http://localhost:3001/getjson?f=";
    let url = urlP.concat(filename);
    console.log(url);
    return this.http.get(url)/*.subscribe((res)=>{
      data = res
      console.log(data)
    })
    return data;
  }
*/
  //enregistre data sur le fichier filename avec le endpoint /postjson de POST
  postData(filename: string, data: any[]): any {
    let url = 'http://localhost:3001/postData';
    const headers = { 'content-type': 'application/json' };
    let body = this.getData(filename);
    return this.http.post(url + '/postjson', body, { headers: headers });
  }

  //met à jour la liste des produit dispo selon ce qui est dans le panier
  updateProduits() {}

  getUser(): Observable<HttpResponse<any>> {
    return this.getData('usagers.json');
  }

  getProduits(): Observable<HttpResponse<any>> {
    return this.getData('products.json');
  }

  getPanier() {
    let listePro: any;
    let proCart: any;
    this.getProduits().subscribe((res) => {
      listePro = res;
      console.log(listePro.body);
    });
    proCart = this.lstpanier.filter(listePro);
    return proCart;
    //apelle getProduit() pour avoir une liste des produits
    //retourne ceux qui se trouvent dans le lstpanier ()
  }

  getCandidats() {
    //this.getData("candidats.json").then((requesteddata) => { console.log(requesteddata);this.candidats = requesteddata; return(this.candidats); });
    //return this.candidats;
  }

  //Product service
  togglePanier(product: Product) {
    const found = this.items.find(
      (item: any) => JSON.stringify(item) === JSON.stringify(product)
    );
    if (!found) {
      this.items.push(product);
      localStorage.setItem('products', JSON.stringify(this.items));
      localStorage.setItem('nbItems', JSON.stringify(this.items.length));
    }
  }

  getItems() {
    return this.items;
  }

  itemsCount() {
    localStorage.setItem('nbItems', JSON.stringify(this.items.length));
    return JSON.stringify(this.items.length);
  }

  clearCart() {
    localStorage.removeItem('products');
    this.items = [];
    return this.items;
  }
}
