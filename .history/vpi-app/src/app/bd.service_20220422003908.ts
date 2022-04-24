import { Injectable } from '@angular/core';
import * as listeUsager from '../assets/JSON/usagers.json';
import * as listeCandidat from '../assets/JSON/candidats.json';
import * as listeProduit from '../assets/JSON/products.json';
import { HttpClient, HttpResponse } from '@angular/common/http';
import { Observable, throwError } from 'rxjs';
import { map, catchError} from 'rxjs/operators';


@Injectable({
  providedIn: 'root'
})
export class BdService {
  private users:any = null;
  private candidats:any = (listeCandidat as any).default;
  private produits:any = null;
  //liste des codes qui se trouvent dans le panier
  lstpanier:any[]=[];

  constructor(protected http: HttpClient) { }

  //retourne un tableau de json avec le endpoint /getjson de GET
  getData(filename:string){
    /*
    let data:any;
    let urlP = "http://localhost:3001/getjson?f=";
    let url = urlP.concat(filename);
    console.log(url);
    this.http.get(url).subscribe((res)=>{
      data = res
      console.log(data)
      return data;
    })*/
    let urlP = "http://localhost:3001/getjson?f=";
    let url = urlP.concat(filename);
    return this.http.get(url);
  }

  //enregistre data sur le fichier filename avec le endpoint /postjson de POST
  postData(filename:string, data:any[]):any{
    let url = "http://localhost:3001/postData";
    const headers = { 'content-type': 'application/json'};
    let body = this.getData(filename);
    return this.http.post(url + '/postjson', body,{'headers':headers});
  }

  //met à jour la liste des produit dispo selon ce qui est dans le panier
  updateProduits(){}

  getUser(){
    this.getData("usagers.json").subscribe((res)=>{
      this.users = res
      console.log(this.users)
      return this.users;
    })
    /*
    this.users = this.getData("usagers.json");
    console.log(this.getData("usagers.json"));
    return this.users;*/
  }

  //appelle getData() afin d'avoir une liste de produits json
  getProduits(){
    this.produits = this.getData("products.json");
    console.log(this.produits);
    return this.produits;
  }

  getPanier(){
    //apelle getProduit() pour avoir une liste des produits
    //retourne ceux qui se trouvent dans le lstpanier ()
  }

  //ajoute le produit si celui-ci n'est pas dans le panier. Sinon on le supprime du panier
  togglePanier(cpr:string){}

  getCandidats(){
    return this.candidats;
  }
}
