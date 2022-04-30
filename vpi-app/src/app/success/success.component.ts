import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';

@Component({
  selector: 'app-success',
  templateUrl: './success.component.html',
  styleUrls: ['./success.component.css']
})
export class SuccessComponent implements OnInit {

  role: string|null ='';

  constructor(private router:Router) {}

  ngOnInit(): void {
    this.role = this.verifierLocalStorage('utilisateur');
  }

  //verifie le local storage
  verifierLocalStorage(val:string):string|null{
    return localStorage.getItem(val);
  }

  //redirection vers un autre component
  ngGo(){
    this.router.navigateByUrl('/products')
  }
}
