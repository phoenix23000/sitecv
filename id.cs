using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Cv
{
    #region Id
    public class Id
    {
        #region Member Variables
        protected string _nom;
        protected string _email;
        protected string _message;
        protected int _id;
        #endregion
        #region Constructors
        public Id() { }
        public Id(string nom, string email, string message)
        {
            this._nom=nom;
            this._email=email;
            this._message=message;
        }
        #endregion
        #region Public Properties
        public virtual string Nom
        {
            get {return _nom;}
            set {_nom=value;}
        }
        public virtual string Email
        {
            get {return _email;}
            set {_email=value;}
        }
        public virtual string Message
        {
            get {return _message;}
            set {_message=value;}
        }
        public virtual int Id
        {
            get {return _id;}
            set {_id=value;}
        }
        #endregion
    }
    #endregion
}