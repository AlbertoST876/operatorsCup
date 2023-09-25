<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Member;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $members = [
            [2, 1, "Plainairp48.XP",  "raul/Plainairplane48#2626", null,                                  null, null,                                     "2004-05-03", 1],
            [3, 1, "kikidios.XP",     "kiki el god#4231",          null,                                  null, null,                                     "2004-05-07", 1],
            [3, 1, "Sp1cyMuf1ns.XP",  "Spicymuffins#1003",         null,                                  null, null,                                     "2004-04-16", 1],
            [3, 1, "IZANGiA.XP",      "IZANGIA#3770",              null,                                  null, null,                                     "2003-12-26", 1],
            [3, 1, "S1RP3R1.XP",      "S1RP3R1 #5544",             null,                                  null, null,                                     "2004-10-06", 1],
            [4, 1, "Ruben14.XP",      "Ruben14#3478",              null,                                  null, null,                                     "2003-05-14", 1],
            [4, 1, "Octane187.XP",    "Octane_187#9117",           null,                                  null, null,                                     "2004-11-22", 1],
            [2, 2, "Matt.Luna",       "[SPARTA] Matt#8094",        null,                                  null, null,                                     "2000-10-11", 1],
            [3, 2, "Antrox.Luna",     "Antrox #2256",              "https://twitter.com/AntroxR6",        null, null,                                     "1997-04-24", 1],
            [3, 2, "Dokkiin.Luna",    "Dokkiin#3109",              "https://twitter.com/DOKKIIN_",        null, null,                                     "2002-08-14", 1],
            [3, 2, "Jeimto.Luna",     "Jeimto #0953",              "https://twitter.com/JeimtoR6S",       null, null,                                     "1996-01-04", 1],
            [3, 2, "Huayraa.Luna",    "huayraa",                   "https://twitter.com/Huayraa_",        null, null,                                     "1997-05-06", 1],
            [1, 3, "Dixter.SCUTI",    ".dixter",                   "https://twitter.com/Dixter999",       null, null,                                     null,         1],
            [2, 3, "valdivro2Spicy",  "valdiviaa_02#6369",         "https://twitter.com/valdiviaa_02",    null, null,                                     "2002-08-08", 1],
            [3, 3, "RxGNar2Spicy",    "RxGNaRR#7522",              "https://twitter.com/RxGNaRR",         null, null,                                     "2002-10-06", 1],
            [3, 3, "Geok2Spicy",      "GeoK#6527",                 "https://twitter.com/GeokR6",          null, null,                                     "2003-02-12", 1],
            [3, 3, "Alexx2Spicy",     "alexx.#1791",               "https://twitter.com/aleexx04__",      null, null,                                     "2004-10-10", 1],
            [3, 3, "D4N-_-I.ZERO",    "D4N#9843",                  "https://twitter.com/dan1glezz",       null, null,                                     "2002-06-11", 1],
            [2, 4, "AGlorius.ETY",    "aglorius",                  "https://twitter.com/AGloriusR6",      null, null,                                     "2001-12-13", 1],
            [3, 4, "Trust.ETY",       "trust#4917",                null,                                  null, null,                                     "1996-05-14", 1],
            [3, 4, "Perpi.2q",        "perias.",                   null,                                  null, null,                                     "2000-07-21", 1],
            [3, 4, "Emiterm.ETY",     "Emiterm#4195",              "https://twitter.com/Emitermr6",       null, null,                                     "2001-12-17", 1],
            [3, 4, "R3N-_-",          "R3N#8745",                  null,                                  null, null,                                     "2005-03-22", 1],
            [2, 5, "ReesWillz",       "ReesWillz",                 "https://twitter.com/ReesWillz",       null, "https://www.youtube.com/@reeswillz4918", "2001-08-14", 1],
            [3, 5, "Strop.crpt",      "JackGreal #0854",           "https://twitter.com/JackGrealisreal", null, null,                                     "2001-12-20", 1],
            [3, 5, "Guti-",           "benn7792",                  null,                                  null, null,                                     "2000-05-09", 1],
            [3, 5, "Mike.-",          "Mike.-- #2956",             null,                                  null, null,                                     "2001-05-14", 1],
            [3, 5, "Scar.-_-",        "Tom/Scar #5673",            "https://twitter.com/scar_r6",         null, null,                                     "2001-05-07", 1],
            [2, 6, "jemis.GRDX",      "jemis",                     null,                                  null, null,                                     "1986-08-12", 1],
            [3, 6, "Damian.GRDX",     "damian05012004",            null,                                  null, null,                                     "2004-01-05", 1],
            [3, 6, "Panda.GRDX",      "femalepanda",               null,                                  null, null,                                     "2001-12-31", 1],
            [3, 6, "Breathtake.GRDX", "breathtake",                null,                                  null, null,                                     "2000-03-15", 1],
            [3, 6, "Kayoss.GRDX",     "Kayoss",                    null,                                  null, null,                                     "2003-04-15", 1],
            [4, 6, "b0urne.GRDX",     "b0urne",                    null,                                  null, null,                                     "1995-02-07", 1],
            [4, 6, "tRiPPeN.GRDX",    "trippen",                   null,                                  null, null,                                     "2002-08-06", 1],
            [2, 7, "Tedd.BH",         "vaazquez#5073",             "https://twitter.com/vaazquezR6",      null, null,                                     "2003-08-16", 1],
            [3, 7, "Morales.BH",      "Moraales#4424",             "https://twitter.com/sergioomoraales", null, null,                                     "2005-02-13", 1],
            [3, 7, "Gordo.BH",        "Gordo#0842",                "https://twitter.com/AguilaR6_",       null, null,                                     "2004-03-06", 1],
            [3, 7, "Gomeez.BH",       "Gomee#3797",                null,                                  null, null,                                     "2004-11-17", 1],
            [3, 7, "Steix.BH",        "MiniKiros#7058",            null,                                  null, null,                                     "2005-04-11", 1],
            [1, 8, "Dukki.ASTO",      "Dukkir6",                   "https://twitter.com/DukkiR6S",        null, null,                                     "1998-06-17", 1],
            [2, 8, "Bluezz.ASTO",     "bluezzfox",                 "https://twitter.com/BlueZzFox",       null, null,                                     "2002-05-02", 1],
            [3, 8, "Kuutsa.ASTO",     "kuutsa",                    null,                                  null, null,                                     "2001-06-26", 1],
            [3, 8, "Lxgiit.ASTO",     "lxgiit",                    null,                                  null, null,                                     "2000-03-13", 1],
            [3, 8, "Proxic.ASTO",     "proxic",                    null,                                  null, null,                                     "1999-01-23", 1],
            [3, 8, "elastrei",        "elastrei",                  null,                                  null, null,                                     "1996-03-18", 1],
            [4, 8, "Nebulawga",       "Nebula",                    null,                                  null, null,                                     "2003-06-07", 1],
        ];

        foreach ($members as $member)
        {
            Member::factory() -> create([
                "role_id" => $member[0],
                "team_id" => $member[1],
                "nickname" => $member[2],
                "discord" => $member[3],
                "twitter" => $member[4],
                "twitch" => $member[5],
                "youtube" => $member[6],
                "birthday" => $member[7],
                "active" => $member[8],
            ]);
        }
    }
}
