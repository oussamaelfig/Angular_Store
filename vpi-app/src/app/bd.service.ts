import { Injectable } from '@angular/core';
import * as listeCandidat from '../assets/JSON/candidats.json';
import { HttpClient, HttpResponse } from '@angular/common/http';
import { Observable, throwError } from 'rxjs';
import { map, catchError} from 'rxjs/operators';


@Injectable({
  providedIn: 'root'
})
export class BdService {
  private users:any =[];
  private candidats:any = (listeCandidat as any).default;
  private produits:any =[];
  //liste des codes qui se trouvent dans le panier
  lstpanier:any[]=[];

  constructor(protected http: HttpClient) { }

  async getData(filename:string): Promise<any[]>{
    let urlP = "http://localhost:3001/getjson?f=";
    let url = urlP.concat(filename);
    let requesteddata:any = await this.http.get<any[]>(url, { "responseType": "json" }).toPromise();
    console.log("callhttpgetpromise");
    console.log(requesteddata);
    return (await requesteddata);
  }

  /*
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
    })* /
    let urlP = "http://localhost:3001/getjson?f=";
    let url = urlP.concat(filename);
    return this.http.get(url);
  }*/

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
    /*
    this.getData("usagers.json").subscribe((res)=>{
      this.users = res
      console.log(this.users)
    })
    return this.users;
    */
    this.getData("usagers.json").then((requesteddata) => { console.log(requesteddata);this.users = requesteddata;return(this.users); });
    console.log(this.users);
    return this.users;
  }

  //appelle getData() afin d'avoir une liste de produits json
  getProduits(){
    /*this.getData("products.json").subscribe((res)=>{
      this.produits = res;
    })
    return this.produits;
  */}

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
