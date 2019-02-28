using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Mradb
{
    #region Mra_post
    public class Mra_post
    {
        #region Member Variables
        protected int _id;
        protected unknown _date;
        protected string _title;
        protected string _details;
        protected string _img;
        protected string _imgName;
        protected string _cat;
        protected string _etc;
        #endregion
        #region Constructors
        public Mra_post() { }
        public Mra_post(unknown date, string title, string details, string img, string imgName, string cat, string etc)
        {
            this._date=date;
            this._title=title;
            this._details=details;
            this._img=img;
            this._imgName=imgName;
            this._cat=cat;
            this._etc=etc;
        }
        #endregion
        #region Public Properties
        public virtual int Id
        {
            get {return _id;}
            set {_id=value;}
        }
        public virtual unknown Date
        {
            get {return _date;}
            set {_date=value;}
        }
        public virtual string Title
        {
            get {return _title;}
            set {_title=value;}
        }
        public virtual string Details
        {
            get {return _details;}
            set {_details=value;}
        }
        public virtual string Img
        {
            get {return _img;}
            set {_img=value;}
        }
        public virtual string ImgName
        {
            get {return _imgName;}
            set {_imgName=value;}
        }
        public virtual string Cat
        {
            get {return _cat;}
            set {_cat=value;}
        }
        public virtual string Etc
        {
            get {return _etc;}
            set {_etc=value;}
        }
        #endregion
    }
    #endregion
}