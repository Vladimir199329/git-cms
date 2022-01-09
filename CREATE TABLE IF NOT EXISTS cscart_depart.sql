CREATE TABLE IF NOT EXISTS cscart_departaments(
    departament_id INT(11) unsigned NOT NULL auto_increment,
    status varchar(1) NOT NULL default 'A',
    timestamp INT(11) unsigned NOT NULL default '0',
    upd_timestamp INT(11) unsigned NOT NULL default '0',
    user_id INT(11) unsigned NOT NULL default '0',
    KEY (user_id),
    PRIMARY KEY (departament_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8
CREATE TABLE IF NOT EXISTS cscart_departaments_descriptions (
    departament_id INT(11) unsigned NOT NULL default '0',
    lang_code char(2) NOT NULL default '',
    collection varchar(255) NOT NULL default '',
    description text null,
    PRIMARY KEY (departament_id, lang_code)
) ENGINE=InnoDB DEFAULT CHARSET=utf8
CREATE TABLE IF NOT EXISTS cscart_departaments_links (
    departament_id INT(11) unsigned NOT NULL default '0',
    product_id INT(11) unsigned NOT NULL default '0',
    KEY (product_id),
    KEY (departament_id),
    PRIMARY KEY (departament_id, product_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8