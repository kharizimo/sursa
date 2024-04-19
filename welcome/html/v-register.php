
<?php 
$title=Lang::translate("Inscription");
$groupe_sanguin=['O+','O-','A+','A-','B+','B-','AB+','AB-','Je ne sais pas'];
?>
<div class="row"><form id="forms" method="post" enctype="multipart/form-data" action="engine/v-user/insert" class="col">
    <input type="hidden" name="mvt" value="<?=$mvt??''?>">
    <div class="card">
        <?=$_card_header?>
        <div class="card-body">
            <div class="row mb-2"><div class="col text-center">
              <input type="file"  id="photo" name="photo" class="d-none" onchange="loadFile(event)">
              <input type="hidden" id="loaded" name="loaded" value="0">
              <img id="avatar" height="200" src="img/avatar/0.png" alt="">
            </div></div>
            <div class="row"><div class="col text-center">
              <button type="button" onclick="document.getElementById('photo').click();" class="btn btn-outline-danger btn-sm">Charger la photo</button>
              <button type="button" onclick="
              document.getElementById('avatar').src='img/avatar/0.png';
              document.getElementById('loaded').value=0;"
              class="btn btn-danger btn-sm">Supprimer la photo</button>
            </div></div>
            <div class="row mt-2"><div class="col text-center"><button data-toggle="modal" data-target="#modal" id="camera" type="button" class="btn btn-secondary btn-sm" style="width:250px"><span class="fa fa-camera"></span> Réglementation des photos</button></div></div>
            <hr>
            <div class="row">
              <div class="form-group col-md-6">
                  <label for="">Nom <span class="text-danger">*</span></label>
                  <input type="text" style="text-transform: uppercase;" id="nom" name="nom" class="form-control upper" placeholder="Nom">
              </div>
              <div class="form-group col-md-6">
                  <label for="">Prénom <span class="text-danger">*</span></label>
                  <input style="text-transform:capitalize" type="text" id="prenom" name="prenom" class="form-control" placeholder="Prénom">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-6">
                  <label for="">Postnom <span class="text-danger"></span></label>
                  <input type="text" style="text-transform: uppercase;" id="postnom" name="postnom" class="form-control upper" placeholder="Postnom">
              </div>
              <div class="col-md-6 form-group">
                    <label for="">Nationalité</label>
                    <select name="nationalite" id="nationalite" class="form-control">
                        <option value="-1" disabled selected>Séléctionnez</option>
                        <option>Afghanistan</option><option>Albanie</option><option>Algérie</option><option>Samoa américaines</option><option>Andorre</option><option>Angola</option><option>Anguilla</option><option>Antarctique</option><option>Antigua-et-Barbuda</option><option>Argentine</option><option>Arménie</option><option>Aruba</option><option>Australie</option><option>Autriche</option><option>Azerbaïdjan</option><option>Bahamas</option><option>Bahreïn</option><option>Bangladesh</option><option>Barbade</option><option>Biélorussie</option><option>Belgique</option><option>Belize</option><option>Bénin</option><option>Bermudes</option><option>Bhoutan</option><option>Bolivie</option><option>Bosnie-Herzégovine</option><option>Botswana</option><option>Île Bouvet</option><option>Brésil</option><option>Territoire britannique de l'océan Indien</option><option>Brunei Darussalam</option><option>Bulgarie</option><option>Burkina Faso</option><option>Burundi</option><option>Cambodge</option><option>Cameroun</option><option>Canada</option><option>Cap-Vert</option><option>Îles Caïmans</option><option>République Centrafricaine</option><option>Tchad</option><option>Chili</option><option>Chine</option><option>Christmas Island</option><option>Cocos (Keeling )</option><option>Colombie</option><option>Comores</option><option>République du Congo</option><option>République Démocratique du Congo</option><option>Îles Cook</option><option>Costa Rica</option><option>Côte d'Ivoire</option><option>Croatie (Hrvatska)</option><option>Cuba</option><option>Chypre</option><option>République tchèque</option><option>Danemark</option><option>Djibouti</option><option>Dominique</option><option>République dominicaine</option><option>Timor oriental</option><option>Équateur</option><option>Égypte</option><option>El Salvador</option><option>Guinée Équatoriale</option><option>Erythrée</option><option>Estonie</option><option>Ethiopie</option><option>Iles Falkland (Malvinas)</option><option>Îles Féroé</option><option>Fidji</option><option>Finlande</option><option>France</option><option>France métropolitaine</option><option>Guyane française</option><option>Polynésie française</option><option>Terres australes françaises</option><option>Gabon</option><option>Gambie</option><option>Géorgie</option><option>Allemagne</option><option>Ghana</option><option>Gibraltar</option><option>Grèce</option><option>Groenland</option><option>Grenade</option><option>Guadeloupe</option><option>Guam</option><option>Guatemala</option><option>Guinée</option><option>Guinée-Bissau</option><option>Guyane</option><option>Haïti</option><option>Îles Heard et Mc Donald</option><option>État de la Cité du Vatican Saint-Siège</option><option>Honduras</option><option>Hong Kong</option><option>Hongrie</option><option>Islande</option><option>Inde</option><option>Indonésie</option><option>République islamique d'Iran</option><option>Irak</option><option>Irlande</option><option>Israël</option><option>Italie</option><option>Jamaïque</option><option>Japon</option><option>Jordanie</option><option>Kazakhstan</option><option>Kenya</option><option>Kiribati</option><option>République populaire démocratique de Corée</option><option>République de Corée</option><option>Koweït</option><option>Kirghizistan</option><option>République démocratique populaire Lao</option><option>Lettonie</option><option>Liban</option><option>Lesotho</option><option>Libéria</option><option>Jamahiriya arabe libyenne</option><option>Liechtenstein</option><option>Lituanie</option><option>Luxembourg</option><option>Macao</option><option>l'ex-République yougoslave de Macédoine</option><option>Madagascar</option><option>Malawi</option><option>Malaisie</option><option>Maldives</option><option>Mali</option><option>Malte</option><option>Iles Marshall</option><option>Martinique</option><option>Mauritanie</option><option>Maurice</option><option>Mayotte</option><option>Mexique</option><option>États fédérés de Micronésie</option><option>République de Moldavie</option><option>Monaco</option><option>Mongolie</option><option>Montserrat</option><option>Maroc</option><option>Mozambique</option><option>Myanmar</option><option>Namibie</option><option>Nauru</option><option>Népal</option><option>Pays-Bas</option><option>Antilles néerlandaises</option><option>Nouvelle-Calédonie</option><option>Nouvelle-Zélande</option><option>Nicaragua</option><option>Niger</option><option>Nigeria</option><option>Niue</option><option>Norfolk Island</option><option>Iles Mariannes du Nord</option><option>Norvège</option><option>Oman</option><option>Pakistan</option><option>Palaos</option><option>Panama</option><option>Papouasie-Nouvelle-Guinée</option><option>Paraguay</option><option>Pérou</option><option>Philippines</option><option>Pitcairn</option><option>Pologne</option><option>Portugal</option><option>Porto Rico</option><option>Qatar</option><option>Réunion</option><option>Roumanie</option><option>Fédération de Russie</option><option>Rwanda</option><option>Saint-Kitts-et-Nevis</option><option>Sainte-Lucie</option><option>Saint-Vincent et les Grenadines</option><option>Samoa</option><option>Saint-Marin</option><option>Sao Tomé</option><option>Arabie saoudite</option><option>Sénégal</option><option>Seychelles</option><option>Sierra Leone</option><option>Singapour</option><option>Slovaquie (République slovaque)</option><option>Slovénie</option><option>Îles Salomon</option><option>Somalie</option><option>Afrique du Sud</option><option>Géorgie du Sud et îles Sandwich du Sud</option><option>Espagne</option><option>Sri Lanka</option><option>St. Hélène</option><option>St. Pierre et Miquelon</option><option>Soudan</option><option>Suriname</option><option>Îles Svalbard et Jan Mayen</option><option>Swaziland</option><option>Suède</option><option>Suisse</option><option>République arabe syrienne</option><option>Taïwan</option><option>Tadjikistan</option><option>Tanzanie</option><option>Thaïlande</option><option>Togo</option><option>Tokelau</option><option>Tonga</option><option>Trinité-et-Tobago</option><option>Tunisie</option><option>Turquie</option><option>Turkménistan</option><option>Îles Turques et Caïques</option><option>Tuvalu</option><option>Ouganda</option><option>Ukraine</option><option>Émirats arabes unis</option><option>Royaume-Uni</option><option>États-Unis</option><option>Îles mineures éloignées des États-Unis</option><option>Uruguay</option><option>Ouzbékistan</option><option>Vanuatu</option><option>Venezuela</option><option>Vietnam</option><option>Îles Vierges (britanniques)</option><option>Îles Vierges (États-Unis)</option><option>Îles Wallis et Futuna</option><option>Sahara occidental</option><option>Yémen</option><option>Yougoslavie</option><option>Zambie</option><option>Zimbabwe</option>        </select>
                </div>
            </div>
            <hr>
            <div class="row">
              <div class="form-group col-md-3">
                <label for="">Genre <span class="text-danger">*</span></label>
                <select name="sexe" id="sexe" class="form-control">
                    <option value="-1" disabled selected>Séléctionnez</option>
                    <option value="M">Masculin</option>
                    <option value="F">Féminin</option>
                </select>
              </div>
              <div class="form-group col-md-3">
                <label for="">Groupe sanguin <span class="text-danger">*</span></label>
                <select name="groupe_sanguin" id="groupe_sanguin" class="form-control">
                    <option value="-1" disabled selected>Séléctionnez</option>
                    <?=Utils::combobox(['array'=>$groupe_sanguin])?>
                </select>
              </div>
              <div class="col-md-3 form-group">
                <label for="">Taille (Cm) <span class="text-danger">*</span></label>
                <select name="taille" id="taille" class="form-control"><option selected disabled>Selectionnez</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option><option>25</option><option>26</option><option>27</option><option>28</option><option>29</option><option>30</option><option>31</option><option>32</option><option>33</option><option>34</option><option>35</option><option>36</option><option>37</option><option>38</option><option>39</option><option>40</option><option>41</option><option>42</option><option>43</option><option>44</option><option>45</option><option>46</option><option>47</option><option>48</option><option>49</option><option>50</option><option>51</option><option>52</option><option>53</option><option>54</option><option>55</option><option>56</option><option>57</option><option>58</option><option>59</option><option>60</option><option>61</option><option>62</option><option>63</option><option>64</option><option>65</option><option>66</option><option>67</option><option>68</option><option>69</option><option>70</option><option>71</option><option>72</option><option>73</option><option>74</option><option>75</option><option>76</option><option>77</option><option>78</option><option>79</option><option>80</option><option>81</option><option>82</option><option>83</option><option>84</option><option>85</option><option>86</option><option>87</option><option>88</option><option>89</option><option>90</option><option>91</option><option>92</option><option>93</option><option>94</option><option>95</option><option>96</option><option>97</option><option>98</option><option>99</option><option>100</option><option>101</option><option>102</option><option>103</option><option>104</option><option>105</option><option>106</option><option>107</option><option>108</option><option>109</option><option>110</option><option>111</option><option>112</option><option>113</option><option>114</option><option>115</option><option>116</option><option>117</option><option>118</option><option>119</option><option>120</option><option>121</option><option>122</option><option>123</option><option>124</option><option>125</option><option>126</option><option>127</option><option>128</option><option>129</option><option>130</option><option>131</option><option>132</option><option>133</option><option>134</option><option>135</option><option>136</option><option>137</option><option>138</option><option>139</option><option>140</option><option>141</option><option>142</option><option>143</option><option>144</option><option>145</option><option>146</option><option>147</option><option>148</option><option>149</option><option>150</option><option>151</option><option>152</option><option>153</option><option>154</option><option>155</option><option>156</option><option>157</option><option>158</option><option>159</option><option>160</option><option>161</option><option>162</option><option>163</option><option>164</option><option>165</option><option>166</option><option>167</option><option>168</option><option>169</option><option>170</option><option>171</option><option>172</option><option>173</option><option>174</option><option>175</option><option>176</option><option>177</option><option>178</option><option>179</option><option>180</option><option>181</option><option>182</option><option>183</option><option>184</option><option>185</option><option>186</option><option>187</option><option>188</option><option>189</option><option>190</option><option>191</option><option>192</option><option>193</option><option>194</option><option>195</option><option>196</option><option>197</option><option>198</option><option>199</option><option>200</option><option>201</option><option>202</option><option>203</option><option>204</option><option>205</option><option>206</option><option>207</option><option>208</option><option>209</option><option>210</option><option>211</option><option>212</option><option>213</option><option>214</option><option>215</option><option>216</option><option>217</option><option>218</option><option>219</option><option>220</option><option>221</option><option>222</option><option>223</option><option>224</option><option>225</option><option>226</option><option>227</option><option>228</option><option>229</option><option>230</option><option>231</option><option>232</option><option>233</option><option>234</option><option>235</option><option>236</option><option>237</option><option>238</option><option>239</option><option>240</option><option>241</option><option>242</option><option>243</option><option>244</option><option>245</option><option>246</option><option>247</option><option>248</option><option>249</option><option>250</option></select>
              </div>
              <div class="col-md-3 form-group">
                <label for="">Poids (Kg) <span class="text-danger">*</span></label>
                <select name="poids" id="poids" class="form-control"><option selected disabled>Selectionnez</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option><option>25</option><option>26</option><option>27</option><option>28</option><option>29</option><option>30</option><option>31</option><option>32</option><option>33</option><option>34</option><option>35</option><option>36</option><option>37</option><option>38</option><option>39</option><option>40</option><option>41</option><option>42</option><option>43</option><option>44</option><option>45</option><option>46</option><option>47</option><option>48</option><option>49</option><option>50</option><option>51</option><option>52</option><option>53</option><option>54</option><option>55</option><option>56</option><option>57</option><option>58</option><option>59</option><option>60</option><option>61</option><option>62</option><option>63</option><option>64</option><option>65</option><option>66</option><option>67</option><option>68</option><option>69</option><option>70</option><option>71</option><option>72</option><option>73</option><option>74</option><option>75</option><option>76</option><option>77</option><option>78</option><option>79</option><option>80</option><option>81</option><option>82</option><option>83</option><option>84</option><option>85</option><option>86</option><option>87</option><option>88</option><option>89</option><option>90</option><option>91</option><option>92</option><option>93</option><option>94</option><option>95</option><option>96</option><option>97</option><option>98</option><option>99</option><option>100</option><option>101</option><option>102</option><option>103</option><option>104</option><option>105</option><option>106</option><option>107</option><option>108</option><option>109</option><option>110</option><option>111</option><option>112</option><option>113</option><option>114</option><option>115</option><option>116</option><option>117</option><option>118</option><option>119</option><option>120</option><option>121</option><option>122</option><option>123</option><option>124</option><option>125</option><option>126</option><option>127</option><option>128</option><option>129</option><option>130</option><option>131</option><option>132</option><option>133</option><option>134</option><option>135</option><option>136</option><option>137</option><option>138</option><option>139</option><option>140</option><option>141</option><option>142</option><option>143</option><option>144</option><option>145</option><option>146</option><option>147</option><option>148</option><option>149</option><option>150</option><option>151</option><option>152</option><option>153</option><option>154</option><option>155</option><option>156</option><option>157</option><option>158</option><option>159</option><option>160</option><option>161</option><option>162</option><option>163</option><option>164</option><option>165</option><option>166</option><option>167</option><option>168</option><option>169</option><option>170</option><option>171</option><option>172</option><option>173</option><option>174</option><option>175</option><option>176</option><option>177</option><option>178</option><option>179</option><option>180</option><option>181</option><option>182</option><option>183</option><option>184</option><option>185</option><option>186</option><option>187</option><option>188</option><option>189</option><option>190</option><option>191</option><option>192</option><option>193</option><option>194</option><option>195</option><option>196</option><option>197</option><option>198</option><option>199</option><option>200</option><option>201</option><option>202</option><option>203</option><option>204</option><option>205</option><option>206</option><option>207</option><option>208</option><option>209</option><option>210</option><option>211</option><option>212</option><option>213</option><option>214</option><option>215</option><option>216</option><option>217</option><option>218</option><option>219</option><option>220</option><option>221</option><option>222</option><option>223</option><option>224</option><option>225</option><option>226</option><option>227</option><option>228</option><option>229</option><option>230</option><option>231</option><option>232</option><option>233</option><option>234</option><option>235</option><option>236</option><option>237</option><option>238</option><option>239</option><option>240</option><option>241</option><option>242</option><option>243</option><option>244</option><option>245</option><option>246</option><option>247</option><option>248</option><option>249</option><option>250</option><option>251</option><option>252</option><option>253</option><option>254</option><option>255</option><option>256</option><option>257</option><option>258</option><option>259</option><option>260</option><option>261</option><option>262</option><option>263</option><option>264</option><option>265</option><option>266</option><option>267</option><option>268</option><option>269</option><option>270</option><option>271</option><option>272</option><option>273</option><option>274</option><option>275</option><option>276</option><option>277</option><option>278</option><option>279</option><option>280</option><option>281</option><option>282</option><option>283</option><option>284</option><option>285</option><option>286</option><option>287</option><option>288</option><option>289</option><option>290</option><option>291</option><option>292</option><option>293</option><option>294</option><option>295</option><option>296</option><option>297</option><option>298</option><option>299</option><option>300</option><option>301</option><option>302</option><option>303</option><option>304</option><option>305</option><option>306</option><option>307</option><option>308</option><option>309</option><option>310</option><option>311</option><option>312</option><option>313</option><option>314</option><option>315</option><option>316</option><option>317</option><option>318</option><option>319</option><option>320</option><option>321</option><option>322</option><option>323</option><option>324</option><option>325</option><option>326</option><option>327</option><option>328</option><option>329</option><option>330</option><option>331</option><option>332</option><option>333</option><option>334</option><option>335</option><option>336</option><option>337</option><option>338</option><option>339</option><option>340</option><option>341</option><option>342</option><option>343</option><option>344</option><option>345</option><option>346</option><option>347</option><option>348</option><option>349</option><option>350</option><option>351</option><option>352</option><option>353</option><option>354</option><option>355</option><option>356</option><option>357</option><option>358</option><option>359</option><option>360</option><option>361</option><option>362</option><option>363</option><option>364</option><option>365</option><option>366</option><option>367</option><option>368</option><option>369</option><option>370</option><option>371</option><option>372</option><option>373</option><option>374</option><option>375</option><option>376</option><option>377</option><option>378</option><option>379</option><option>380</option><option>381</option><option>382</option><option>383</option><option>384</option><option>385</option><option>386</option><option>387</option><option>388</option><option>389</option><option>390</option><option>391</option><option>392</option><option>393</option><option>394</option><option>395</option><option>396</option><option>397</option><option>398</option><option>399</option><option>400</option><option>401</option><option>402</option><option>403</option><option>404</option><option>405</option><option>406</option><option>407</option><option>408</option><option>409</option><option>410</option><option>411</option><option>412</option><option>413</option><option>414</option><option>415</option><option>416</option><option>417</option><option>418</option><option>419</option><option>420</option><option>421</option><option>422</option><option>423</option><option>424</option><option>425</option><option>426</option><option>427</option><option>428</option><option>429</option><option>430</option><option>431</option><option>432</option><option>433</option><option>434</option><option>435</option><option>436</option><option>437</option><option>438</option><option>439</option><option>440</option><option>441</option><option>442</option><option>443</option><option>444</option><option>445</option><option>446</option><option>447</option><option>448</option><option>449</option><option>450</option></select>
              </div>
            </div>
            <div class="row">
                <div class="col-md-4 form-group">
                  <label for="">Date de naissance</label>
                  <select name="jour_nais" id="jour_nais" class="form-control">
                    <option value="-1" disabled selected>Jour</option>
                    <option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option><option>25</option><option>26</option><option>27</option><option>28</option><option>29</option><option>30</option><option>31</option>                  </select>
                </div>
                <div class="col-md-4 form-group">
                  <label for="">&nbsp;</label>
                  <select name="mois_nais" id="mois_nais" class="form-control">
                      <option value="-1" disabled selected>Mois</option>
                      <option value="1">Janvier</option><option value="2">Février</option><option value="3">Mars</option><option value="4">Avril</option><option value="5">Mai</option><option value="6">Juin</option><option value="7">Juillet</option><option value="8">Aout</option><option value="9">Septembre</option><option value="10">Octobre</option><option value="11">Novembre</option><option value="12">Décembre</option>                  </select>
                </div>
                <div class="col-md-4 form-group">
                    <label for="">&nbsp;</label>
                    <select name="annee_nais" id="annee_nais" class="form-control">
                        <option value="-1" disabled selected>Année</option>
                        <option>2020</option><option>2019</option><option>2018</option><option>2017</option><option>2016</option><option>2015</option><option>2014</option><option>2013</option><option>2012</option><option>2011</option><option>2010</option><option>2009</option><option>2008</option><option>2007</option><option>2006</option><option>2005</option><option>2004</option><option>2003</option><option>2002</option><option>2001</option><option>2000</option><option>1999</option><option>1998</option><option>1997</option><option>1996</option><option>1995</option><option>1994</option><option>1993</option><option>1992</option><option>1991</option><option>1990</option><option>1989</option><option>1988</option><option>1987</option><option>1986</option><option>1985</option><option>1984</option><option>1983</option><option>1982</option><option>1981</option><option>1980</option><option>1979</option><option>1978</option><option>1977</option><option>1976</option><option>1975</option><option>1974</option><option>1973</option><option>1972</option><option>1971</option><option>1970</option><option>1969</option><option>1968</option><option>1967</option><option>1966</option><option>1965</option><option>1964</option><option>1963</option><option>1962</option><option>1961</option><option>1960</option><option>1959</option><option>1958</option><option>1957</option><option>1956</option><option>1955</option><option>1954</option><option>1953</option><option>1952</option><option>1951</option><option>1950</option><option>1949</option><option>1948</option><option>1947</option><option>1946</option><option>1945</option><option>1944</option><option>1943</option><option>1942</option><option>1941</option><option>1940</option><option>1939</option><option>1938</option><option>1937</option><option>1936</option><option>1935</option><option>1934</option><option>1933</option><option>1932</option><option>1931</option><option>1930</option><option>1929</option><option>1928</option><option>1927</option><option>1926</option><option>1925</option><option>1924</option><option>1923</option><option>1922</option><option>1921</option><option>1920</option>                    </select>
                </div>
            </div>
            <hr>
            <div class="row">
              <div class="form-group col-md-4">
                  <label for="">N° Passeport<span class="text-danger">*</span></label>
                  <input type="text" id="num_passeport" name="num_passeport" class="form-control text-upper" placeholder="Passeport">
              </div>
              <div class="form-group col-md-4">
                  <label for="">Autre pièce d'identité </label>
                  <select name="type_piece" id="type_piece" class="form-control">
                    <option value="" selected disabled>Type de pièce</option>
                    <?=Utils::combobox(['array'=>["Carte d'électeur","Permis de conduire","Carte d'identité nationale"]])?>
                  </select>
              </div>
              <div class="form-group col-md-4">
                  <label for="">&nbsp;</label>
                  <input style="text-transform:uppercase" type="text" id="autre_piece" name="autre_piece" class="form-control upper" placeholder="Identifiant">
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="form-group col-md-6">
                  <label for="">Email<span class="text-danger">*</span></label>
                  <input type="text" id="email" name="email" class="form-control" placeholder="Email" >
                  <i for="" class="float-right">Votre email vous servira de connexion</i>
              </div>
              <div class="form-group col-md-6">
                  <label for="">Téléphone <span class="text-danger">*</span></label>
                  <input style="" type="tel" id="telephone" value="" name="telephone" class="iti-tel form-control" placeholder="Téléphone">
                  
              </div>
            </div>
            <hr>
            <div class="row"><div class="col text-center"><input type="submit" value="Soumettre" class="btn btn-outline-danger btn-lg"></div></div>
        </div>
        <?=$_card_footer?>
    </div>
</form></div>
<div class="modal fade" id="modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title text-danger">Réglementation des photos</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        <p class="lead">La longueur de la photo du passeport est de 45 mm, la largeur de 35 mm et au-dessus de la tête une zone libre de 5 mm doit rester.</p>
        <img src="img/norme-photo.png" style="width:80%" alt="">
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<script>
  var loadFile = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('avatar');
      output.src = reader.result;
      document.getElementById('loaded').value=1;
    };
    reader.readAsDataURL(event.target.files[0]);
  };
  validators.rules={
        email:{required:true,email:true},
        nom:{required:true},
        prenom:{required:true},
        nationalite:{required:true},
        sexe:{required:true},
        taille:{required:true},
        poids:{required:true},
        jour_nais:{required:true},
        mois_nais:{required:true},
        annee_nais:{required:true},
        telephone:{required:true},
  }
  validators.messages={
      email:{required:"Adresse mail requis",email:"Adresse mail invalide"},
      nom:{required:"valeur requise"},
      prenom:{required:"valeur requise"},
      nationalite:{required:"valeur requise"},
      sexe:{required:"valeur requise"},
      taille:{required:"valeur requise"},
      poids:{required:"valeur requise"},
      jour_nais:{required:"valeur requise"},
      mois_nais:{required:"valeur requise"},
      annee_nais:{required:"valeur requise"},
      telephone:{required:"valeur requise"},
  }

  document.querySelectorAll('.upper').forEach(item=>{
    item.addEventListener('change',event=>{item.value=item.value.toUpperCase()})
  })
</script>