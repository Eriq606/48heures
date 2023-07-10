create or replace view v_dernierobjectif as
    select idprofileobjectif, idprofile, idobjectif, poids, max(date) 
    from profileobjectif
    group by idprofile;