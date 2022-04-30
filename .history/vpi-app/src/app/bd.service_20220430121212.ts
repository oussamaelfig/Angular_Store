import { Injectable } from '@angular/core';
import * as listeCandidat from '../assets/JSON/candidats.json';
import { HttpClient, HttpResponse } from '@angular/common/http';
import { Observable, throwError } from 'rxjs';
import { map, catchError } from 'rxjs/operators';
import { Product } from './products';
import { Router } from '@angular/router';

@Injectable({
  providedIn: 'root',
})
export class BdService {
  private users: any = [];
  private candidats: any = (listeCandidat as any).default;
  private produits: any = [];
  //liste des codes qui se trouvent dans le panier
  //lstpanier: any[] = [];
  lstpanier: Product[] = [];

  constructor(protected http: HttpClient, private router: Router) {}

  //va chercher les donnes d,un des fichier json
  getData(filename: string): Observable<HttpResponse<any>> {
    let urlP = 'http://localhost:3001/getjson?f=';
    let url = urlP.concat(filename);
    let data: any = this.http.get(url, { observe: 'response' });
    return data;
  }

  //enregistre data sur le fichier filename avec le endpoint /postjson de POST
  postData(datatosave: any, filename: string) {
    let posturl: string = 'http://localhost:3001/postjson';
    const params = {
      data: JSON.stringify(datatosave),
      file: filename,
    };
    console.log('datatosave');
    console.log(datatosave);
    console.log(params);
    return this.http.post<any>(posturl, params);
  }

  //met à jour la liste des produit dispo selon ce qui est dans le panier
  updateProduits() {}

  getUser(): Observable<HttpResponse<any>> {
    return this.getData('usagers.json');
  }

  //retourne un observable qui correspond a la liste de produit
  getProduits(): Observable<HttpResponse<any>> {
    return this.getData('products.json');
  }

  getCandidats(): Observable<HttpResponse<any>> {
    return this.getData('candidats.json');
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

  addToCart(product: Product) {
    const found = this.lstpanier.find(
      (item: any) => JSON.stringify(item) === JSON.stringify(product)
    );
    if (!found) {
      product.quantite--;
      this.lstpanier.push(product);
      window.alert(
        'Votre produit a été ajouté, aller explorer d autres produits ou aller terminer vos achats dans le panier'
      );
    } else {
      window.alert('vous avez déjà ajouté ce produit');
    }
  }

  //Product service
  togglePanier(product: Product) {
    const found = this.lstpanier.find(
      (item: any) => JSON.stringify(item) === JSON.stringify(product)
    );
    if (!found) {
      product.quantite--;
      this.lstpanier.push(product);
      window.alert(
        'Votre produit a été ajouté, aller explorer d autres produits ou aller terminer vos achats dans le panier'
      );
    } else {
      window.alert('vous avez déjà ajouté ce produit');
      for (let i = 0; i < this.lstpanier.length; i++) {
        if (this.lstpanier[i].nom === product.nom) {
          this.lstpanier.splice(i, 1);
          localStorage.setItem('products', JSON.stringify(this.lstpanier));
          return;
        }
      }
      // this.lstpanier.filter(function (el) {
      //   return el.id != product.id;
      // });
    }
  }

  getItems() {
    return this.lstpanier;
  }

  clearCart() {
    localStorage.removeItem('products');
    this.lstpanier = [];
    return this.lstpanier;
  }

  /*Verifie si il y a un user de connecter. Si non connecter,
  route vers le login sinon, on delete le cookie et ecran dit que la
  deconnexion s'est faite.*/
  verifierConnectUser() {
    if (localStorage.getItem('utilisateur') != null) {
      localStorage.removeItem('utilisateur');
      this.router.navigateByUrl('/logout');
    } else {
      this.router.navigateByUrl('/connecter');
    }
  }
}
